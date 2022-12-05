using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Security.Cryptography.X509Certificates;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using MahApps.Metro.Controls;
using Proyecto_ahora_siksi.BaseDatos;
using System.Threading;
using System.Runtime.Remoting.Channels;

namespace Proyecto_ahora_siksi
{
    /// <summary>
    /// Lógica de interacción para MainWindow.xaml
    /// </summary>
    public partial class MainWindow : MetroWindow
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            msg_error.Content = "Error al iniciar sesión, intente con otras credenciales";
            msg_error.Visibility = Visibility.Hidden;
            img_boton.Visibility = Visibility.Hidden;
            gif_boton.Visibility = Visibility.Visible;
            MenuPrincipal sel = new Proyecto_ahora_siksi.MenuPrincipal();
            Administrativo usuario = new Administrativo();
            usuario.Username = UserText.Text;
            usuario.Password = UserPass.Password;
            if(login(usuario))
            {
                sel.Show();
                this.Close();
            }
            else {
                msg_error.Visibility = Visibility.Visible;
                img_boton.Visibility = Visibility.Visible;
                gif_boton.Visibility = Visibility.Hidden;
            }
        }
        /*---Funciones--*/
        private Boolean login(Administrativo user)
        {
            try
            {
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                String consulta = "select * from UsuarioAdministrativo;";
                SqlConnection conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(consulta, conn);
                conn.Open();
                SqlDataReader registros = comando.ExecuteReader();
                while (registros.Read())
                {
                    if (registros[0].ToString() == user.Username && registros[1].ToString() == user.Password)
                    {
                        return true;
                    }
                }
                return false;
            }
            catch (SqlException ex)
            {
                msg_error.Content = "Error al conectar con el servidor: " + ex.Message;
                return false;
            }
        }
        /*---Modelos---*/
        public class Administrativo
        {
            public string Username { get; set; }
            public string Password { get; set; }
        }
    }
}

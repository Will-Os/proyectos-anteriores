using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Reflection;
using System.Security.Cryptography.X509Certificates;
using System.Security.Policy;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;
using MahApps.Metro;
using MahApps.Metro.Controls;

namespace Proyecto_ahora_siksi
{
    /// <summary>
    /// Lógica de interacción para MenuPrincipal.xaml
    /// </summary>
    /// 
    /*-----------BOTONES-------------*/
    public partial class MenuPrincipal : MetroWindow
    {
        Boolean contraste;
        public MenuPrincipal()
        {
            InitializeComponent();
            cbx_lista_clientes();
            cbox_lista_contratos();
        }

        private void TabControl_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {

        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            ThemeManager.ChangeAppStyle(Application.Current, ThemeManager.GetAccent("Blue"), ThemeManager.GetAppTheme("BaseLight"));
            MainWindow ventana = new MainWindow();
            ventana.Show();
            this.Close();
        }

        private void WindowsFormsHost_ChildChanged(object sender, System.Windows.Forms.Integration.ChildChangedEventArgs e)
        {

        }

        private void ListBox_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {

        }

        private void TextBox_TextChanged(object sender, TextChangedEventArgs e)
        {

        }

        private void TextBox_TextChanged_1(object sender, TextChangedEventArgs e)
        {

        }

        private void Button_Click_1(object sender, RoutedEventArgs e)
        {
            mod_cli.Visibility = Visibility.Visible;
        }

        private void DataGrid_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {

        }

        private void Button_Click_2(object sender, RoutedEventArgs e)
        {

        }

        private void Button_Click_3(object sender, RoutedEventArgs e)
        {

        }

        private void Button_Click_4(object sender, RoutedEventArgs e)
        {
            if (contraste == true)
            {
                ThemeManager.ChangeAppStyle(Application.Current, ThemeManager.GetAccent("Blue"), ThemeManager.GetAppTheme("BaseLight"));
                vent_principal.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                tab_principal.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                tab_principal.BorderBrush = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                btn_registrar.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                btn_cerrarsesion.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                btn_eliminar.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                btn_luz.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                btn_modificar.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                btn_confmod.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                btn_filtrar.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));


                btn_crearcontrato.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                btn_confcontrato.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                btn_terminarcontrato.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));
                btn_filtrarcont.Background = new SolidColorBrush(Color.FromRgb(17, 144, 203));

                admin_cli.Background = new SolidColorBrush(Color.FromRgb(255, 255, 255));
                scrl_admcli.Background = new SolidColorBrush(Color.FromRgb(218, 218, 218));
                list_cli.Background = new SolidColorBrush(Color.FromRgb(255, 255, 255));
                scrl_listcli.Background = new SolidColorBrush(Color.FromRgb(218, 218, 218));
                grid_admco.Background = new SolidColorBrush(Color.FromRgb(255, 255, 255));
                scrl_admcont.Background = new SolidColorBrush(Color.FromRgb(218, 218, 218));
                grid_listco.Background = new SolidColorBrush(Color.FromRgb(255, 255, 255));
                scrl_listco.Background = new SolidColorBrush(Color.FromRgb(218, 218, 218));
                contraste = false;
            }
            else
            {
                ThemeManager.ChangeAppStyle(Application.Current, ThemeManager.GetAccent("Blue"), ThemeManager.GetAppTheme("BaseDark"));
                vent_principal.Background = new SolidColorBrush(Color.FromRgb(0, 0, 0));
                tab_principal.Background = new SolidColorBrush(Color.FromRgb(0, 0, 0));
                tab_principal.BorderBrush = new SolidColorBrush(Color.FromRgb(0, 0, 0));
                btn_cerrarsesion.Background = new SolidColorBrush(Color.FromRgb(0, 0, 0));
                btn_luz.Background = new SolidColorBrush(Color.FromRgb(0, 0, 0));

                btn_registrar.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                btn_eliminar.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                btn_modificar.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                btn_confmod.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                btn_filtrar.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                btn_crearcontrato.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                btn_confcontrato.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                btn_terminarcontrato.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                btn_filtrarcont.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));

                admin_cli.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                scrl_admcli.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                list_cli.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                scrl_listcli.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                grid_admco.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                scrl_admcont.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                grid_listco.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                scrl_listco.Background = new SolidColorBrush(Color.FromRgb(40, 40, 40));
                contraste = true;
            }
        }

        private void Button_Click_5(object sender, RoutedEventArgs e)
        {
            if (ctr_rut.SelectedIndex!=-1) {
                ctr_rut.IsEnabled = false;
                mdl_cliente cli = form_modificar(ctr_rut.Text);
                mod_contrato.Visibility = Visibility.Visible;
                ctr_nomcli.Content = cli.nombre_contacto;
                ctr_rscli.Content = cli.razon_social;
                nomb_contrato.Content = "CONTRATO " + DateTime.Now.ToString("yyyyMMddHHmm");
            }
            else
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Se debe seleccionar un rut para esta operación";
            }
        }
        private void btn_modificar_Click(object sender, RoutedEventArgs e)
        {
            switch (sel_cbox_rut.SelectedIndex)
            {
                case -1:
                    txt_errores.Foreground = Brushes.Red;
                    txt_errores.Text = "Seleccione rut para modificar";
                    break;
                default:
                    mdl_cliente cli = form_modificar(sel_cbox_rut.Text);
                    md_nombre.Text = cli.nombre_contacto;
                    md_razonsocial.Text = cli.razon_social;
                    md_mail.Text = cli.mail_contacto;
                    md_dircli.Text = cli.dir_contacto;
                    md_tel.Text = cli.tel_cli;
                    md_cbox_act.SelectedIndex = Int16.Parse(cli.act_emp)-1;
                    md_cbox_te.SelectedIndex = (Int16.Parse(cli.tipo_emp)/10)-1;
                    mod_cli.Visibility = Visibility.Visible;
                    sel_cbox_rut.IsEnabled = false;
                    break;
            }
        }
        private void btn_confcontrato_Click(object sender, RoutedEventArgs e)
        {
            mdl_contrato contrato = new mdl_contrato();
            Double uf_asistentes=0;
            Double uf_adicional=0;
            int uf_base = 0;
            String str_uf_base="0";
            Double total=0;

            if (ctr_comentarios.Text.Trim() == "" || ctr_cbox_te.SelectedIndex == -1 || ctr_casistentes.Text.Trim()=="" || ctr_fecha_fin.SelectedDate == null || ctr_cpersonal.Text.Trim() == "" || fhorainicio==null || fhorafin==null)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Todos los campos son obligatorios";
            }
            else
            {
                
                contrato.numero = nomb_contrato.Content.ToString().Substring(9);
                Console.WriteLine(contrato.numero);
                contrato.creacion = DateTime.Now.ToString("yyyy/MM/dd");
                DateTime fech = Convert.ToDateTime(ctr_fecha_fin.Text);
                contrato.termino = fech.ToString("yyy/MM/dd");
                contrato.rutcliente = ctr_rut.Text;
                contrato.id_modalidad = modalidad("select IdModalidad from ModalidadServicio", ctr_cbox_te.Text);
                contrato.id_tipoevento = modalidad("select IdTipoEvento from ModalidadServicio", ctr_cbox_te.Text);
                fech = Convert.ToDateTime(fhorainicio.SelectedDate);
                contrato.fh_inicio = fech.ToString("yyyy-MM-dd hh:mm:ss");
                fech = Convert.ToDateTime(fhorafin.SelectedDate);
                contrato.fh_fin = fech.ToString("yyyy-MM-dd hh:mm:ss");
                contrato.asistentes = ctr_casistentes.Text;
                contrato.adicional = ctr_cpersonal.Text;
                int sc = Int16.Parse(ctr_casistentes.Text);
                switch (sc)
                {
                    case int n when(n>=1 && n<=20):
                       uf_asistentes = 3;
                       break;
                    case int n when (n >= 21 && n <= 50):
                       uf_asistentes = 5;
                       break;
                    case int n when (n>50):
                       Double redondeo = n/20;
                       uf_asistentes = Math.Round(redondeo)*2;
                       break;
                    default:
                        uf_asistentes = 0;
                       break;
                }
                sc= Int16.Parse(ctr_cpersonal.Text);
                switch (sc)
                {
                    case 0:
                        uf_adicional = 0;
                        break;
                    case 1:
                        uf_adicional = 0;
                        break;
                    case 2:
                        uf_adicional = 2;
                        break;
                    case 3:
                        uf_adicional = 3;
                        break;
                    case 4:
                        uf_adicional = 3.5;
                        break;
                    default:
                        uf_adicional =3.5 + (sc - 4) * 0.5;
                        break;
                }
                if (uf_asistentes != 0)
                {
                    str_uf_base = modalidad("select ValorBase from ModalidadServicio", ctr_cbox_te.Text);
                    uf_base = Int32.Parse(str_uf_base);
                    total = uf_base + uf_asistentes + uf_adicional;
                    contrato.total_num = total;
                    contrato.observaciones = ctr_comentarios.Text;
                    insertar_contrato(contrato);
                    ctr_rut.IsEnabled = true;
                    cbox_lista_contratos();
                    mod_contrato.Visibility = Visibility.Hidden;
                }
                else
                {
                    txt_errores.Foreground = Brushes.Red;
                    txt_errores.Text = "Cantidad de asistentes debe ser mayor a 0";
                }
            }
        }

        private void btn_confmod_Click(object sender, RoutedEventArgs e)
        {
            mdl_cliente cliente = new mdl_cliente();
            if (md_razonsocial.Text.Trim() == "" || md_nombre.Text.Trim() == "" || md_dircli.Text.Trim() == "" || md_mail.Text.Trim() == "" || md_cbox_te.SelectedIndex == -1 || md_cbox_act.SelectedIndex == -1 || md_tel.Text.Trim() == "")
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Todos los campos son obligatorios";
            }
            else
            {
                cliente.rut = sel_cbox_rut.Text;
                cliente.nombre_contacto = md_nombre.Text.Trim();
                cliente.razon_social = md_razonsocial.Text.Trim();
                cliente.dir_contacto = md_dircli.Text.Trim();
                cliente.mail_contacto = md_mail.Text.Trim();
                cliente.tel_cli = md_tel.Text.Trim();
                cliente.act_emp = (md_cbox_act.SelectedIndex + 1).ToString();
                cliente.tipo_emp = ((md_cbox_te.SelectedIndex + 1) * 10).ToString();
                alterar_cliente(cliente);
                sel_cbox_rut.IsEnabled = true;
                mod_cli.Visibility = Visibility.Hidden;
            }
           
        }

        private void btn_terminarcontrato_Click(object sender, RoutedEventArgs e)
        {
            if (cbox_terminarcontrato.SelectedIndex==-1)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Debe seleccionar un numero de contrato";
            }
            else
            {
                String ncont=cbox_terminarcontrato.Text;
                terminar_contrato(ncont);
            }
        }
        private void btn_filtrar_Click(object sender, RoutedEventArgs e)
        {
            String dbstring = "select cli.NombreContacto,cli.RutCliente,ae.Descripcion,te.Descripcion from Cliente cli join ActividadEmpresa ae on cli.IdActividadEmpresa = ae.IdActividadEmpresa join TipoEmpresa te on cli.IdTipoEmpresa = te.IdTipoEmpresa";
            String condicion;
            if (cbox_rut.SelectedIndex != -1) {
                condicion = " where cli.RutCliente = '"+ cbox_rut.Text+"';";
            }else if (cbox_act.SelectedIndex != -1)
            {
                condicion = " where ae.Descripcion = '"+ cbox_act.Text+"';";
            }else if(cbox_te.SelectedIndex != -1)
            {
                Console.WriteLine(cbox_te.Text);
                condicion = " where te.Descripcion= '"+cbox_te.Text+"';";
            }
            else
            {
                condicion = ";";
            }
            tbl_lista_clientes(dbstring+condicion);
        }
        private void cbox_rut_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            cbox_act.SelectedIndex = -1;
            cbox_te.SelectedIndex = -1;
        }
        private void cbox_act_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            cbox_te.SelectedIndex = -1;
            cbox_rut.SelectedIndex = -1;
        }
        private void cbox_te_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            cbox_rut.SelectedIndex = -1;
            cbox_act.SelectedIndex = -1;
        }
        private void flt_cont_rut_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            flt_cont_numero.SelectedIndex = -1;
            flt_cont_te.SelectedIndex = -1;
        }
        private void flt_cont_numero_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            flt_cont_rut.SelectedIndex = -1;
            flt_cont_te.SelectedIndex = -1;
        }
        private void flt_cont_te_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            flt_cont_rut.SelectedIndex = -1;
            flt_cont_numero.SelectedIndex = -1;
        }
        private void btn_registrar_Click(object sender, RoutedEventArgs e)
        {
            if (in_rutcli.Text.Trim()==""||in_rscli.Text.Trim() == ""||in_nomcli.Text.Trim() == ""||in_mailcli.Text.Trim() == ""||in_dircli.Text.Trim() == ""||in_cbox_te.SelectedIndex==-1||in_cbox_act.SelectedIndex==-1||in_telcli.Text.Trim()==""){
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Todos los campos son obligatorios";
            }
            else
            {
                mdl_cliente cliente = new mdl_cliente();
                cliente.rut = in_rutcli.Text.Trim();
                cliente.nombre_contacto = in_nomcli.Text.Trim();
                cliente.razon_social = in_rscli.Text.Trim();
                cliente.dir_contacto = in_dircli.Text.Trim();
                cliente.mail_contacto = in_mailcli.Text.Trim();
                cliente.act_emp = (in_cbox_act.SelectedIndex+1).ToString();
                cliente.tipo_emp = ((in_cbox_te.SelectedIndex+1)*10).ToString();
                cliente.tel_cli = in_telcli.Text.Trim();
                insertar_cliente(cliente);
            }
        }
        private void btn_eliminar_Click(object sender, RoutedEventArgs e)
        {
            mdl_cliente cliente = new mdl_cliente();
            if (sel_cbox_rut.SelectedIndex == -1)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Debe seleccionar un rut";
            }
            else
            {
                cliente.rut = sel_cbox_rut.Text;
                eliminar_cliente(cliente);
            }
        }
        private void btn_filtrarcont_Click(object sender, RoutedEventArgs e)
        {
            String sentencia = "select ct.Numero,ct.RutCliente,ev.Descripcion,md.Nombre,ct.ValorTotalContrato from Contrato ct join ModalidadServicio md on md.IdModalidad = ct.IdModalidad join TipoEvento ev on ev.IdTipoEvento = ct.IdTipoEvento";
            String condicion;
            if (flt_cont_rut.SelectedIndex!=-1)
            {
                condicion = " where ct.RutCliente='"+flt_cont_rut.Text+"' and Realizado=0;";
            }else if (flt_cont_numero.SelectedIndex != -1)
            {
                condicion = " where ct.Numero='"+flt_cont_numero.Text+ "'and Realizado=0;";
            }else if (flt_cont_te.SelectedIndex != -1)
            {
                condicion=" where ct.IdTipoEvento="+(flt_cont_te.SelectedIndex+1)*10+"and Realizado=0;";
            }
            else
            {
                condicion = " where Realizado=0;";
            }
            tbl_lista_contratos(sentencia+condicion);
        }
        /*----Funciones-------*/
        private void terminar_contrato(String ncontrato)
        {
            try
            {
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                String sentencia = "update Contrato set Realizado=1 where Numero=@ncont;";
                SqlConnection conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(sentencia, conn);
                conn.Open();
                comando.Parameters.AddWithValue("@ncont",ncontrato);
                if (comando.ExecuteNonQuery() != 0)
                {
                    txt_errores.Foreground = Brushes.Green;
                    txt_errores.Text = "Los datos fueron modificados exitosamente";
                }
                else
                {
                    txt_errores.Foreground = Brushes.Red;
                    txt_errores.Text = "Ocurrió un error desconocido durante la inserción de datos";
                }
                cbox_lista_contratos();
                conn.Close();
            }
            catch (SqlException ex)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Error con la base de datos: "+ex.Message;
            }
        }
        private void tbl_lista_contratos(String cadena)
        {
            List<mdl_contrato> lista = new List<mdl_contrato>();
            try
            {
                SqlConnection conn;
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(cadena, conn);
                conn.Open();
                SqlDataReader registros = comando.ExecuteReader();
                while (registros.Read())
                {
                    mdl_contrato cont = new mdl_contrato();
                    cont.numero = registros[0].ToString();
                    cont.rutcliente = registros[1].ToString();
                    cont.id_tipoevento = registros[2].ToString();
                    cont.id_modalidad = registros[3].ToString();
                    cont.valor = registros[4].ToString();
                    lista.Add(cont);
                }
                dg_tbl_contrato.ItemsSource = lista;
                txt_errores.Foreground = Brushes.Green;
                txt_errores.Text = "Datos extraidos exitosamente";
                registros.Close();
            }
            catch
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Ha ocurrido un error al conectar con la BASE DE DATOS";
            }
        }
        private void insertar_contrato(mdl_contrato cont)
        {
            try
            {
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                String sentencia = "insert into Contrato values('"+cont.numero+"',@creacion,@termino,@rutcli,@idmodalidad,@idtipoevento,@fhin,@fhfin,@asist,@pa,'False',@total,@obs);";
                SqlConnection conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(sentencia, conn);
                conn.Open();
                comando.Parameters.AddWithValue("@creacion",cont.creacion);
                comando.Parameters.AddWithValue("@termino",cont.termino);
                comando.Parameters.AddWithValue("@rutcli",cont.rutcliente);
                comando.Parameters.AddWithValue("@idmodalidad",cont.id_modalidad);
                comando.Parameters.AddWithValue("@idtipoevento",cont.id_tipoevento);
                comando.Parameters.AddWithValue("@fhin",cont.fh_inicio);
                comando.Parameters.AddWithValue("@fhfin",cont.fh_fin);
                comando.Parameters.AddWithValue("@asist",cont.asistentes);
                comando.Parameters.AddWithValue("@pa",cont.adicional);
                comando.Parameters.AddWithValue("@total",cont.total_num);
                comando.Parameters.AddWithValue("@obs",cont.observaciones);
                if (comando.ExecuteNonQuery() != 0)
                {
                    txt_errores.Foreground = Brushes.Green;
                    txt_errores.Text = "Los datos fueron ingresados exitosamente";
                }
                else
                {
                    txt_errores.Foreground = Brushes.Red;
                    txt_errores.Text = "Ocurrió un error desconocido durante la inserción de datos";
                }
                cbox_lista_contratos();
                conn.Close();
            }
            catch (SqlException ex)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Ocurrió un error durante la inserción de datos: "+ex.Message;
            }
        }
        private void eliminar_cliente(mdl_cliente cli)
        {
            try
            {
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                
                String sentencia = "delete from Contrato where RutCliente=@rcli;";
                SqlConnection conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(sentencia, conn);
                conn.Open();
                //Elim Contratos asociados
                comando.Parameters.AddWithValue("@rcli", cli.rut);
                comando.ExecuteNonQuery();
                //Elim Cliente
                sentencia= "delete from Cliente where RutCliente=@rcli2;";
                comando.CommandText = sentencia;
                comando.Parameters.AddWithValue("@rcli2", cli.rut);
                if (comando.ExecuteNonQuery() != 0)
                {
                    txt_errores.Foreground = Brushes.Green;
                    txt_errores.Text = "Los datos fueron eliminados exitosamente";
                }
                else
                {
                    txt_errores.Foreground = Brushes.Red;
                    txt_errores.Text = "Ocurrió un error desconocido durante la eliminación de datos";
                }
                cbx_lista_clientes();
                conn.Close();
            }
            catch (SqlException ex)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Ocurrió un errordurante la eliminación de datos " + ex.Message;
            }
        }
        private void alterar_cliente(mdl_cliente cli)
        {
            try
            {
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                String sentencia = "update Cliente set RazonSocial=@rscli,NombreContacto=@nomcli,MailContacto=@mailcli,Direccion=@dircli,Telefono=@telcli,IdActividadEmpresa=@actcli,IdTipoEmpresa=@tipcli where RutCliente=@rcli;";
                SqlConnection conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(sentencia, conn);
                conn.Open();
                comando.Parameters.AddWithValue("@rcli", cli.rut);
                comando.Parameters.AddWithValue("@rscli", cli.razon_social);
                comando.Parameters.AddWithValue("@nomcli", cli.nombre_contacto);
                comando.Parameters.AddWithValue("@mailcli", cli.mail_contacto);
                comando.Parameters.AddWithValue("@dircli", cli.dir_contacto);
                comando.Parameters.AddWithValue("@telcli", cli.tel_cli);
                comando.Parameters.AddWithValue("@actcli", cli.act_emp);
                comando.Parameters.AddWithValue("@tipcli", cli.tipo_emp);
                if (comando.ExecuteNonQuery() != 0)
                {
                    txt_errores.Foreground = Brushes.Green;
                    txt_errores.Text = "Los datos fueron modificados exitosamente";
                }
                else
                {
                    txt_errores.Foreground = Brushes.Red;
                    txt_errores.Text = "Ocurrió un error desconocido durante la inserción de datos";
                }
                cbx_lista_clientes();
                conn.Close();
            }
            catch (SqlException ex)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Ocurrió un errordurante la modificación de datos "+ex.Message;
            }
        }
        private void tbl_lista_clientes(String cadena)
        {
            List<mdl_cliente> lista = new List<mdl_cliente>();
            try
            {
                SqlConnection conn;
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(cadena, conn);
                conn.Open();
                SqlDataReader registros = comando.ExecuteReader();
               while (registros.Read())
               {
                   mdl_cliente cliente = new mdl_cliente();
                   cliente.nombre_contacto = registros[0].ToString();
                   cliente.rut = registros[1].ToString();
                   cliente.act_emp = registros[2].ToString();
                   cliente.tipo_emp = registros[3].ToString();
                   lista.Add(cliente);
               }
                dg_seleccion_cliente.ItemsSource = lista;
                txt_errores.Foreground = Brushes.Green;
                txt_errores.Text = "Datos extraidos exitosamente";
                registros.Close();
            }
            catch
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Ha ocurrido un error al conectar con la BASE DE DATOS";
            }
        }
        private void insertar_cliente(mdl_cliente cli)
        {
            try
            {
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                String sentencia = "insert into Cliente values(@rcli,@rscli,@nomcli,@mailcli,@dircli,@telcli,@actcli,@tipcli);";
                SqlConnection conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(sentencia, conn);
                conn.Open();
                comando.Parameters.AddWithValue("@rcli", cli.rut);
                comando.Parameters.AddWithValue("@rscli", cli.razon_social);
                comando.Parameters.AddWithValue("@nomcli", cli.nombre_contacto);
                comando.Parameters.AddWithValue("@mailcli", cli.mail_contacto);
                comando.Parameters.AddWithValue("@dircli", cli.dir_contacto);
                comando.Parameters.AddWithValue("@telcli", cli.tel_cli);
                comando.Parameters.AddWithValue("@actcli", cli.act_emp);
                comando.Parameters.AddWithValue("@tipcli", cli.tipo_emp);
                if (comando.ExecuteNonQuery()!=0)
                {
                    txt_errores.Foreground = Brushes.Green;
                    txt_errores.Text = "Los datos fueron ingresados exitosamente";
                }
                else
                {
                    txt_errores.Foreground = Brushes.Red;
                    txt_errores.Text = "Ocurrió un error desconocido durante la inserción de datos";
                }
                cbx_lista_clientes();
                conn.Close();
            }
            catch(SqlException ex)
            {
                if (ex.Number == 2627)
                {
                    txt_errores.Foreground = Brushes.Red;
                    txt_errores.Text = "Ocurrió un error durante la inserción de datos: Rut duplicado";
                }
                else
                {
                    txt_errores.Text = "Ocurrió un error desconocido durante la inserción de datos";
                }
            }
        }
        private mdl_cliente form_modificar(String rut)
        {
            try
            {
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                String consulta = "select * from Cliente where RutCliente=@rcli;";
                mdl_cliente cliente = new mdl_cliente();
                SqlConnection conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(consulta, conn);
                conn.Open();
                comando.Parameters.AddWithValue("@rcli", rut);
                SqlDataReader registros = comando.ExecuteReader();
                while (registros.Read())
                {
                    cliente.rut = registros[0].ToString();
                    cliente.razon_social = registros[1].ToString();
                    cliente.nombre_contacto = registros[2].ToString();
                    cliente.mail_contacto = registros[3].ToString();
                    cliente.dir_contacto = registros[4].ToString();
                    cliente.tel_cli = registros[5].ToString();
                    cliente.act_emp = registros[6].ToString();
                    cliente.tipo_emp = registros[7].ToString();
                }
                conn.Close();
                txt_errores.Foreground = Brushes.Green;
                txt_errores.Text = "Valores recuperados correctamente";
                return cliente;
            }catch (SqlException ex)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Ocurrió un error la conexion: "+ex.Message;
                return null;
            }
        }
        private void cbox_lista_contratos()
        {
            try
            {
                List<mdl_contrato> lista = new List<mdl_contrato>();
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                String consulta = "select Numero from Contrato where Realizado=0";
                SqlConnection conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(consulta, conn);
                conn.Open();
                SqlDataReader registros = comando.ExecuteReader();
                while (registros.Read())
                {
                    mdl_contrato cont = new mdl_contrato();
                    cont.numero = registros[0].ToString();
                    lista.Add(cont);
                }
                flt_cont_numero.ItemsSource = lista;
                cbox_terminarcontrato.ItemsSource = lista;
            }
            catch (SqlException ex)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Ocurrió un error la conexion: " + ex.Message;
            }

        }
        private void cbx_lista_clientes()
        {
            try
            {
                List<mdl_combobox> lista = new List<mdl_combobox>();
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                String consulta = "select RutCliente from Cliente";
                SqlConnection conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(consulta, conn);
                conn.Open();
                SqlDataReader registros = comando.ExecuteReader();
                while (registros.Read())
                {
                    mdl_combobox ruts = new mdl_combobox();
                    ruts.rut = registros[0].ToString();
                    lista.Add(ruts);
                }
                cbox_rut.ItemsSource = lista;
                sel_cbox_rut.ItemsSource = lista;
                ctr_rut.ItemsSource = lista;
                flt_cont_rut.ItemsSource = lista;
            }catch (SqlException ex)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Ocurrió un error la conexion: " + ex.Message;
            }
        }
        private String modalidad(String buscar,String mod)
        {
            try
            {
                String conexion = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename='C:\Users\Wilo\Desktop\Proyectos Viejos\Proyecto ONBREAK v1.0\BaseDatos\bd_onbreak.mdf';Integrated Security=True";
                String consulta =buscar+" where Nombre='"+mod+"';";
                String modalidad="";
                SqlConnection conn = new SqlConnection(conexion);
                SqlCommand comando = new SqlCommand(consulta, conn);
                conn.Open();
                SqlDataReader registros = comando.ExecuteReader();
                while (registros.Read())
                {
                    modalidad = registros[0].ToString();
                }
                conn.Close();
                return modalidad;
            }
            catch (SqlException ex)
            {
                txt_errores.Foreground = Brushes.Red;
                txt_errores.Text = "Ocurrió un error la conexion: " + ex.Message;
                return null;
            }
        }
        /*-----Modelos de datos------------*/
        public class mdl_cliente{
            public String rut { get; set; }
            public String razon_social { get; set; }
            public String nombre_contacto { get; set; }
            public string dir_contacto { get; set; }
            public string mail_contacto { get; set; }
            public String act_emp { get; set; }
            public String tipo_emp{ get; set; }
            public string tel_cli { get; set; }
        }
        public class mdl_contrato
        {
            public String numero { get; set; }
            public String creacion { get; set; }
            public String termino { get; set; }
            public String rutcliente { get; set; }
            public String id_modalidad { get; set; }
            public String id_tipoevento { get; set; }
            public String fh_inicio { get; set; }
            public String fh_fin { get; set; }
            public String asistentes { get; set; }
            public String adicional { get; set; }
            public String realizado { get; set; }
            public String valor { get; set; }
            public String observaciones { get; set; }
            public Double total_num { get; set; }
        }
        public class mdl_combobox
        {   
            public String rut { get; set; }
        }
    }
}

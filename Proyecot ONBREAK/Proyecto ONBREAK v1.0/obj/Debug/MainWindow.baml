   M S B A M L   `   `   `  ????H  DMahApps.Metro, Version=1.6.5.1, Culture=neutral, PublicKeyToken=nullV;clr-namespace:MahApps.Metro.Controls;assembly=MahApps.MetroMahApps.Metro.Controls  5   	   O KProyecto ahora siksi, Version=1.0.0.0, Culture=neutral, PublicKeyToken=null;"clr-namespace:Proyecto_ahora_siksiProyecto_ahora_siksi 5   	   %   Proyecto_ahora_siksi.MainWindow   5      R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35^ ZWindowsFormsIntegration, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   PControls;clr-namespace:MahApps.Metro.Controls;assembly=MahApps.Metro     5   	   4local"clr-namespace:Proyecto_ahora_siksi     5   	   U QWpfAnimatedGif, Version=2.0.0.0, Culture=neutral, PublicKeyToken=9e7cd3b544a090dc,gif"http://wpfanimatedgif.codeplex.com  5   	     ? Title$  LOGIN | OnBreak??5	   	   $	??450??6!   $	??800??6.   
???????
???   ? ? WindowStartupLocation$ CenterScreen=?6e    ? WindowState$ Normal=?6?   (   "MahApps.Metro.Controls.MetroWindow   ShowMaxRestoreButton .   ? Icon$ icon.png??6?   .??5
      ? -   5         ?Name$ 	grid_menu??5
      
???????.+?5   
   ?? -   5         ??Name$ img_menu??5      $??	346,0,0,0q?6"   $
??Fill=?65   $.??(Imagenes/white_logo_color_background.jpg??6D    J? OpacityMask 5      ?? 5       ?? EndPoint$ 0.5,1&?6&   	 ?? 
StartPoint$	 0.5,0&?67   .??5      ? 
 ? Color$
 White??6#   ? 5      $
 	#FF1290CB??6#    ? Offset$ 1Q?65   5      5      ?? 5   
   -   5         ??Name$ btn_ingresar??5      $??
80,343,0,0q?6'   
???????$??66??6z   $	??Top=?6?   $
??Left=?6?   $	??198??6?   ???	#FF1290CB??6N   Z? .??5      ? .+?5      ?? -   5        $ 	img_boton??5      $??multimedia.png??6+   $??-62,10,73,12q?6C   ?? 5      -   5        $ 	gif_boton??5      "  WpfAnimatedGif.ImageBehavior   AnimatedSource$ cargando.gif??6+   $??-62,1,62,-1q?6[   $y?Hidden=?6p   $??cargando.gif??6?   ?? 5      $??INGRESAR??6   $??0,18,-53,18q?6+   $??15(?6@   $??Arial Black)?6N   $
??Bold"?6g   
???????6y   5      5      ?? 5   
   $??Arial Black)?6   $??Nombre de usuario:??6)   $??0,15,654,378q?6F   ???	#FF1290CB6\   ?? 5   
   -   5         ??Name$ UserText??5      *   $MahApps.Metro.Controls.TextBoxHelper   ClearTextButton .    	Watermark$ Ingrese su usuario??6R   $??0,43,0,0q?6?    ?? TextWrapping$
 Wrap=?6?   $
??Left=?6?   $	??341??6?   $??32??6?   $	??Top=?6?   ??6?   Z? 6?   G? 5   
   -   5         G?Name$ UserPass??5       . $ Ingrese su constraseña??6V   $??	0,106,0,0q?6?   $
??Left=?6?   $	??341??6?   $??30??6?   $	??Top=?6?   ??6?   Z? 6?   ?? 5   
   $??Arial Black)?6   $??Contraseña:??6)   $??0,75,667,315q?6?   ???	#FF1290CB6U   ?? 5   
   -   5         ??Name$ 	msg_error??5      $??Arial)?6#   $>??8Error al iniciar sesión, intente con otras credenciales??66   $??0,136,448,233q?6x   ???	#FFFF0808$??10(?6?   $y?Hidden=?6?   5      5       
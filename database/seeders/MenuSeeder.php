<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //HAMBURGUESAS
        $menu=new Menu();
        $menu->name="La catolica";
        $menu->ingredientes="Pan Brioche,Carne de Vacuno,Lechuga romana,Queso Cheddar,Tomate";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=11.55;
        $menu->url="https://s2.abcstatics.com/abc/www/multimedia/gastronomia/2023/03/07/mejor-hamburguesa-espana-sevilla_20230307190221-RXTcASc7Wu7h5hdg6i3AwmJ-1200x840@abc.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Burgiana";
        $menu->ingredientes="Pan,Carne de Vacuno,Cebolla Caramelizada,Pepinillos,Mayonesa,Queso Cheddar";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=12.85;
        $menu->url="https://estaticos-cdn.prensaiberica.es/clip/18b1690a-1e3b-490c-a959-dc01892a1eff_16-9-discover-aspect-ratio_default_0.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Quemada";
        $menu->ingredientes="PanSemillas,Carne de Vacuno, Rucula,Salmon,Mayonesa";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=12.65;
        $menu->url="https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/86A66143-E5A0-4957-9913-B47DF0F49C9F/Derivates/56CC31D7-6A87-49B5-BEBD-34728D9999A4.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Lasaña";
        $menu->ingredientes="Pan,Carne de Buey,Bechamel";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=16.55;
        $menu->url="https://img2.rtve.es/i/?w=1600&i=1649416954898.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Cascada";
        $menu->ingredientes="Pan,Carne de Vacuno,Bacon,Queso chedar";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=13.55;
        $menu->url="https://media.traveler.es/photos/64073862458376745858219e/16:9/pass/BFPP.jpeg";
        $menu->save();
        //ENTRANTES
        $menu=new Menu();
        $menu->name="Tequeños";
        $menu->ingredientes="Hojaldre,Queso Brie";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=2.89;
        $menu->url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLxphdX__33qSE6vdN7XIE15g9GfouT5QI_g&usqp=CAU";
        $menu->save();

        $menu=new Menu();
        $menu->name="Patatas";
        $menu->ingredientes="Patatas con Sal";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=4.25;
        $menu->url="https://img.freepik.com/fotos-premium/cono-papas-fritas-rusticas-llevar_461960-1872.jpg?w=2000";
        $menu->save();

        $menu=new Menu();
        $menu->name="Patatas Deluxe";
        $menu->ingredientes="Patatas con tiras de bacon y queso cheddar";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=4.95;
        $menu->url="https://burguermix.com/wp-content/uploads/2021/06/patatas_bacon_queso1.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Alitas Adobadas";
        $menu->ingredientes="Carne de pollo,sal,oregano,albahaca,aceite de oliva";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=7.55;
        $menu->url="https://carnesbyrafa.es/wp-content/uploads/2021/05/16.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Aros de Cebolla";
        $menu->ingredientes="Cebolla,Harina,Huevo,Leche,Pan rallado";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=4.35;
        $menu->url="https://us.123rf.com/450wm/nitr/nitr1411/nitr141100010/33242272-plato-de-aros-de-cebolla-en-el-fondo-blanco.jpg?ver=6";
        $menu->save();

        //BEBIDAS
        $menu=new Menu();
        $menu->name="Agua";
        $menu->ingredientes="Agua mineral";
        $menu->section="drinks";
        $menu->allergens=1;
        $menu->price=1.55;
        $menu->url="https://www.lavanguardia.com/files/content_image_mobile_filter/files/fp/uploads/2021/06/29/60dae8aabf10a.r_d.620-730.jpeg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Cola";
        $menu->ingredientes="Gaseosa con azucar y sabor";
        $menu->section="drinks";
        $menu->allergens=1;
        $menu->price=2.55;
        $menu->url="https://media.istockphoto.com/id/968834938/es/foto/bebida-sin-alcohol.jpg?s=612x612&w=0&k=20&c=qr_2H-QNZZvSXH5xdAMIN22IDNZYtJjCkYTYqOPv8gA=";
        $menu->save();

        $menu=new Menu();
        $menu->name="Naranjada";
        $menu->ingredientes="Gaseosa con azucar y sabor a naranja";
        $menu->section="drinks";
        $menu->allergens=1;
        $menu->price=2.55;
        $menu->url="https://img.freepik.com/fotos-premium/refresco-naranja-hielo-vaso-sobre-fondo-blanco_55716-2745.jpg?w=2000";
        $menu->save();

        $menu=new Menu();
        $menu->name="Cerveza sin Alcohol";
        $menu->ingredientes="Gaseosa con azucar y sabor a limon";
        $menu->section="drinks";
        $menu->allergens=1;
        $menu->price=2.55;
        $menu->url="https://media.istockphoto.com/id/453744721/es/foto/vaso-de-cerveza.jpg?s=170667a&w=0&k=20&c=qoLMSiuUwieBsbOEck3sxbr5nBjsVPaYbWUXPUFNW10=";
        $menu->save();

        //ENSALADAS

        $menu=new Menu();
        $menu->name="La Pepina";
        $menu->ingredientes="Pepino,Lechuga,Zanahoria,Sal,Vinagre Vino,Aceite,Semillas de Sesamo";
        $menu->section="salads";
        $menu->allergens=1;
        $menu->price=8.90;
        $menu->url="https://www.hogarmania.com/archivos/201705/ensalada-pepino-xl-1280x720x80xX.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Tomatera";
        $menu->ingredientes="Tomate,Queso Motzzarella,Sal,Vinagre de Vino,Aceite";
        $menu->section="salads";
        $menu->allergens=1;
        $menu->price=8.50;
        $menu->url="https://cocina-familiar.com/wp-content/uploads/2023/04/ensalada-de-patatas-y-tomates.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Ave Cesar";
        $menu->ingredientes="Queso Parmesano,Picatostes,Lechuga,Aceite,Anchoas,Pimienta,Sal,Vinagre";
        $menu->section="salads";
        $menu->allergens=1;
        $menu->price=9.50;
        $menu->url="https://thumbs.dreamstime.com/b/un-bol-de-ensalada-cesar-con-sano-bacon-verde-y-croutons-taz%C3%B3n-colmenillas-sobre-mesa-blanca-203267063.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Rusa";
        $menu->ingredientes="Patata,Zanahoria,JudíaVerde,Guisantes,Mayonesa,Atun";
        $menu->section="salads";
        $menu->allergens=1;
        $menu->price=10.55;
        $menu->url="https://content-cocina.lecturas.com/medio/2022/05/26/paso_a_paso_para_hacer_ensaladilla_rusa_de_la_abuela_resultado_final_31694fc2_600x600.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Griega";
        $menu->ingredientes="Queso,Pepino,Tomate,Aceitunas,Sal,Pimienta,Aceite,Vinagre de vino";
        $menu->section="salads";
        $menu->allergens=1;
        $menu->price=9.55;
        $menu->url="https://www.pizzanando.com/wp-content/uploads/2017/10/griega.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Tabulé";
        $menu->ingredientes="Tomate,Cebolleta,Pimiento,Uvas,Cúrcuma,Hierbabuena,Pepino";
        $menu->section="salads";
        $menu->allergens=1;
        $menu->price=8.95;
        $menu->url="https://s3.abcstatics.com/media/gurmesevilla/2009/09/730_tabule_1253230046.jpg";
        $menu->save();

        //CARNES

        $menu=new Menu();
        $menu->name="Entrecot";
        $menu->ingredientes="Carne de Vacuno Añejado";
        $menu->section="meats";
        $menu->allergens=0;
        $menu->price=35.60;
        $menu->url="https://elmesondeandujar.com/wp-content/uploads/2020/07/Entrecot-a-la-brasa-.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Kokstillar";
        $menu->ingredientes="Carne de Vacuno Añejado";
        $menu->section="meats";
        $menu->allergens=0;
        $menu->price=36.50;
        $menu->url="https://todobarbacoa.es/img/costillas-de-ternera-a-la-barbacoa-576.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Entraña";
        $menu->ingredientes="Carne de Vacuno Añejado";
        $menu->section="meats";
        $menu->allergens=0;
        $menu->price=20.50;
        $menu->url="https://www.productosdeasturias.com/4879-thickbox_default/entrana-vacuno-mayor-asturiano.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Vacio";
        $menu->ingredientes="Carne de Vacuno Argentino";
        $menu->section="meats";
        $menu->allergens=0;
        $menu->price=25.55;
        $menu->url="https://www.cucinare.tv/wp-content/uploads/2019/11/Vac%C3%ADo.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Solomillo de cerdo";
        $menu->ingredientes="Carne de Cerdo 100% iberico";
        $menu->section="meats";
        $menu->allergens=0;
        $menu->price=25.65;
        $menu->url="https://canalcocina.es/medias/images/1607MaestrosDelAsadoMedallonesSolomilloCerdoParrillaAcetoBalsamicoSalvia.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Parrillada";
        $menu->ingredientes="Morcilla ,Chorizo, Chinchulines,Carne de vacuno";
        $menu->section="meats";
        $menu->allergens=0;
        $menu->price=55.65;
        $menu->url="https://www.demoslavueltaaldia.com/sites/default/files/parrillada-estilo-argentino.jpg";
        $menu->save();

        //ALERGENOS
        $menu=new Menu();
        $menu->name="La Quinoa";
        $menu->ingredientes="Quinoa, Pan sin gluten";
        $menu->section="allergens";
        $menu->allergens=0;
        $menu->price=12.65;
        $menu->url="https://www.hazteveg.com/img/recipes/full/201412/R15-31866.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Salmónero";
        $menu->ingredientes="Bagel sin gluten,Salmón, Alcaparras ,Aguacate";
        $menu->section="allergens";
        $menu->allergens=0;
        $menu->price=12.65;
        $menu->url="https://chefcompass.com/wp-content/uploads/bagel.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="El Fideo";
        $menu->ingredientes="Fideos de arroz, Veduras";
        $menu->section="allergens";
        $menu->allergens=0;
        $menu->price=9.65;
        $menu->url="https://www.hogarmania.com/archivos/201105/168-fideos-de-arroz-con-verduras-y-soja-xl-668x400x80xX.jpg";
        $menu->save();



        $menu=new Menu();
        $menu->name="Verdurillada";
        $menu->ingredientes="Verduras de la huerta local";
        $menu->section="allergens";
        $menu->allergens=0;
        $menu->price=12.65;
        $menu->url="https://imag.bonviveur.com/emplatado-de-la-parrillada-de-verduras-a-la-plancha.jpg";
        $menu->save();

        //POSTRES
        $menu=new Menu();
        $menu->name="ChocoLoco";
        $menu->ingredientes="Helado de chocolate";
        $menu->section="desserts";
        $menu->allergens=1;
        $menu->price=4.65;
        $menu->url="https://thumbs.dreamstime.com/b/dos-bolas-congeladas-de-helado-chocolate-sobre-platillo-al-fondo-blanco-porcelana-cerca-173073503.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Vainillazo";
        $menu->ingredientes="Helado de vainilla";
        $menu->section="desserts";
        $menu->allergens=0;
        $menu->price=4.65;
        $menu->url="https://us.123rf.com/450wm/foodandmore/foodandmore1207/foodandmore120700091/14414533-vista-de-%C3%A1ngulo-alto-de-las-bolas-de-cremoso-helado-de-vainilla-servido-en-un-plato-blanco-peque%C3%B1o.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="ChupaFresa";
        $menu->ingredientes="Helado de hielo de fresa";
        $menu->section="desserts";
        $menu->allergens=0;
        $menu->price=3.65;
        $menu->url="https://www.things-store.es/3314-thickbox_default/molde-para-helado-calippo-lekue.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Granizado Limon";
        $menu->ingredientes="Hielo con sabor limon";
        $menu->section="desserts";
        $menu->allergens=0;
        $menu->price=4.25;
        $menu->url="https://www.economycash.es/wp-content/uploads/2019/06/Receta-de-Ganizado-de-lim%C3%B3n-1080x675.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Granizado Fresa";
        $menu->ingredientes="Hielo con sabor fresa";
        $menu->section="desserts";
        $menu->allergens=0;
        $menu->price=5.35;
        $menu->url="https://www.granizadospiriz.com/wp-content/uploads/2018/03/fresa-1.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="Granizado Blueberry";
        $menu->ingredientes="Hielo con sabor arandanos";
        $menu->section="desserts";
        $menu->allergens=0;
        $menu->price=5.65;
        $menu->url="https://www.delysiumshop.es/wp-content/uploads/2020/02/productos-granizado-tropical-blue-300x300.jpg";
        $menu->save();

    }
}

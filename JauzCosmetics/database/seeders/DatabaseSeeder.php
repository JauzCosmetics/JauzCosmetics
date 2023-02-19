<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $name = ['MAC Powerpoint Delineador','MAC Paleta de Sombras Amber Times Nine','MAC Barra de Labios Líquida mate Power Kiss','L\'OREAL Infalible 32H Fresh Wear base de maquillaje','L\'OREALInfalible 24 Fresh To Wear Base de Maquillaje Compacto','NARS Colorete en Polvo','IT COSMETICS Base de Maquillaje','LANCÔME Lash Idôle','CLARINS Aceite de Labios','URBAN Spray Fijador','GUERLAIN Meteoritos Poudre Bille','SISLEY Phyto Eye Twist'];
        $price = [18.80,33.20,24.00,8.95,9.98,27.98,25.40,18.65,14.21,21.04,37.85,27.30];
        $stock = [20,10,5,4,12,9,3,2,9,4,10,20];
        $description = ['Una edición limitada de delineadores resistentes al agua y de larga duración en tonos exclusivos con acabados metálicos.  Completa tu look con una brillante selección de tres tonos resistentes al agua, de larga duración y con acabados metálicos.  Suave de aplicar. No se transfiere, no se emborrona y no se mueve. Dibuja la línea. Potencia tus ojos. Se hace notar. Dura y dura. Cada uno de ellos está listo para ser regalado en un envase de edición limitada con burbujas y lazos, todo ello sostenible.',
        'Una paleta amplia que ofrece una gama de colores con tonos ámbar.  Proporciona una serie de texturas de mates a satinadas y nacaradas para crear una variedad de looks tanto de día como de noche. Los tonos saturados, blandos y suaves se alojan en un paleta que se lleva a cualquier lugar. Modo de uso: Aplicar en los párpados con los dedos, una brocha o un aplicador con punta de espuma.',
        '¡Sentir para creer! Powder Kiss, el mate reinventado, aumenta la familia con Powder Kiss Liquid Lipcolour. Una barra de labios mate, ligera y aterciopelada con 10 horas de hidratación.  Gracias a su textura cremosa, similar a una mousse, aporta la cobertura necesaria de una sola pasada dejando un efecto difuminado de alto impacto.  Su textura cremosa proporciona una hidratación inmediata que se mantiene elástica sobre los labios durante todo el día, impidiendo que tus labios se resequen o descamen.  Cuenta con un aplicador en forma de reloj de arena perfecto para lograr una alta precisión.',
        'La base de maquillaje de larga duración y alta cobertura Infalible 32H Fresh Wear de L\'Oréal Paris lo resiste todo y cuida tu piel con su fórmula antioxidante con vitamina C y SPF 25.   32 horas como recién aplicado. Su nueva fórmula con pigmentos finos ultra-concentrados que se adaptan perfectamente al tono de tu piel, permite conseguir una cobertura impecable que dura 32H, como recién aplicado. ¡Se te olvidará que lo llevas puesto!',
        '¡La base de maquillaje que estabas esperando! Infallible 24h Fresh To Wear de L`Oreal París ofrece una cobertura como nunca antes habías visto con un acabado muy natural. Su textura en polvo compacto es capaz de unificar el tono de la piel y difuminar todas las imperfecciones faciales. La duración es uno de sus puntos fuertes. ¡Olvídate de los retoques!',
        'El colorete en polvo de Nars es el imprescindible que no puede faltar en cualquier neceser de maquillaje. Estos icónicos productos nos ofrecen una amplia variedad de tonos naturales que sientan bien a todo tipo de pieles aportando un efecto de buena cara al instante. Gracias a sus fórmulas ricas en pigmentos micronizados, estos polvos ofrecen un color traslúcido y modulable que se integra fácilmente con cada pasada. ¡Disfruta del blush más vendido en Estados Unidos!',
        '¡Es la primera base de maquillaje que contiene un 90% de ingredientes que cuidan la piel, para un resultado luminoso y saludable! Su fórmula contiene sérum iluminador con: 2% de Niacinamida: Ilumina y reduce las manchas oscuras, los poros dilatados y la textura áspera de la piel. Ácido hialurónico: Rellena e hidrata instantáneamente el aspecto de la piel. Extracto de té verde: protege la piel de los agresores ambientales.',
        'Descubre la nueva máscara de pestañas Lash Idôle de Lancôme. La máscara más revolucionaria del mercado, que no se aglutina y que se enfoca en cada pestaña para obtener pestañas más completas, levantadas y extendidas al instante.',
        'Clarins Aceite de Labios Confort es una aceite con color que nutre, repara y proporciona a tus labios un brillo excepcional de inmediato. Su fórmula esta constituida por un coctel excepcional de aceites de jojoba bio, avellana y rosa mosqueta bio, que aporta a los labios una película hidratante, nutritiva, protectora y reparadora. Para todas las mujeres que buscan un producto que no solo realce sus labios, sino que también los cuide y embellezca y para aquellas que deseen añadir un brillo extra a su barra de labios habitual. Su fórmula ultraligera no es pegajosa, contiene un 93% de ingredientes de origen natural.',
        'Spray fijador de maquillaje que ilumina, hidrata y cuida tu piel.  Formulado con vitamina C y agua de cactus, el nuevo spray fijador le dará un jugoso giro a la icónica fórmula de Urban Decay. Este spray fijador no sólo mantiene el maquillaje en su sitio hasta 16 horas, sino que también cuida tu piel con ingredientes que la hidratarán y la revitalizarán para mantener una piel fresca y luminosa antes y después de maquillarte.',
        'Météorites Poudres Billes de Guerlain son toda una constelación de polvos multicolor diseñados para aportar un extra de luminosidad y frescor a nuestro rostro. Estas perlas están diseñadas bajo la tecnología Stardust, una técnica capaz de transformar la luz invisible en un auténtico destello. Su combinación de tonalidades y acabados reduce las rojeces, refresca el cutis, minimiza imperfecciones y atrapa la luz.   Sin duda un producto estrella que se ha convertido en todo un clásico imprescindible desde su nacimiento en 1987.',
        'SISLEY PHYTO EYE TWIST: Phyto Eye Twist es un maquillaje para los párpados \"todo en uno\": sombra, lápiz y eyeliner. Con una mina ultrasensorial, suave y fundente y una textura sensorial de muy larga duración.  Los jumbo de Sisley Phyto Eye Twist son waterproof, no se mueven de su sitio y se pueden combinar los tonos para crear un maquillaje a medida, o usar como base para una sombra en polvo.  Formato ultraligero, muy práctico, sin necesidad de sacapuntas, fácil de guardar en el neceser de maquillaje.  Diseño de cebra a juego con los Phyto Lip Twist y Phyto Blush Éclat de Sisley.'
        ];
        $category = ['Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje',];


        $tamaño = sizeof($name);


        for ($i = 0; $i < $tamaño; $i++) {
            DB::table('products')->insert([
                'name' => $name[$i],
                'price' => $price[$i],
                'stock' => $stock[$i],
                'description' => $description[$i],
                'category' => $category[$i]
            ]);
        }

        for ($i = 0; $i < $tamaño; $i++) {

            $images = [($i+1) . '_0.jpg',($i+1) . '_1.jpg',($i+1) . '_2.jpg',($i+1) . '_3.jpg',($i+1) . '_4.jpg',($i+1). '_5.jpg',($i+1)];

            foreach ($images as $image) {
                DB::table('img_products')->insert([
                    'name' => $image,
                    'product_id' => $i + 1
                ]);
            }
        }

/*         $username = ['adminUser','normalUser','otherUser','juanma','javi','andres'];
        $email = ['adminUser@gmail.com','normalUser@gmail.com','otherUser@gmail.com','juanma@gmail.com','javi@gmail.com','andres@gmail.com'];
        $password = ['1234','1234','1234','1234','1234','1234'];
        $rol = ['admin','user','user','user','user','user'];

        $tamañouser = sizeof($username);


        for ($i = 0; $i < $tamañouser; $i++) {
            DB::table('users')->insert([
                'username' => $username[$i],
                'email' => $email[$i],
                'password' => $password[$i],
                'rol' => $rol[$i],
            ]);
        } */
    }
}

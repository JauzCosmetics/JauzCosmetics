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
        $name = ['Delineador','Paleta de Sombras','Barra de Labios Líquida',
        'Base de Maquillaje','Maquillaje Compacto','Colorete en Polvo',
        'Base de Maquillaje','LANCÔME Lash Idôle','Aceite de Labios',
        'Spray Fijador','Meteoritos Poudre Bille','Phyto Eye Twist',
        'Pack 3 Coleteros Espiral','Cepillo Extra-flexible Extreme',
        'Rizador Cabello en Espiral', 'Set Clips Pétalos', 'Limpiador de Esponjas y Brochas',
        'Set 7 Esponjas Multicolor', 'Mini Limpiador Facial Electrónico', 'Set 3 Esponjas Ducha',
        'Cepillo Corporal 2 en 1', 'Set 24 Gomas Elasticas Finas Multicolor', 'Venus ComfortGlide Breeze Recambios',
        'Kit Care & Rock'
    ];

        $price = [18.80, 33.20, 24.00, 8.95, 9.98,
        27.98, 25.40, 18.65, 14.21, 21.04, 37.85,
        27.30, 3.94, 3.99, 7.99, 2.99, 7.55, 1.99,
        8.95, 1.99, 2.99, 1.20, 10.99, 12.95
    ];

        $stock = [20, 10, 5, 4 ,12 ,9, 3, 2, 9, 4,
        10, 20, 12, 15, 15, 22, 12, 30, 10, 12, 34,
        20, 22, 38];

        $description = ['Una edición limitada de delineadores resistentes al agua y de larga duración en tonos exclusivos con acabados metálicos.  Completa tu look con una brillante selección de tres tonos resistentes al agua, de larga duración y con acabados metálicos.  Suave de aplicar. No se transfiere, no se emborrona y no se mueve. Dibuja la línea. Potencia tus ojos. Se hace notar. Dura y dura. Cada uno de ellos está listo para ser regalado en un envase de edición limitada con burbujas y lazos, todo ello sostenible.',

        'Una paleta amplia que ofrece una gama de colores con tonos ámbar.  Proporciona una serie de texturas de mates a satinadas y nacaradas para crear una variedad de looks tanto de día como de noche. Los tonos saturados, blandos y suaves se alojan en un paleta que se lleva a cualquier lugar. Modo de uso: Aplicar en los párpados con los dedos, una brocha o un aplicador con punta de espuma.',

        '¡Sentir para creer! Powder Kiss, el mate reinventado, aumenta la familia con Powder Kiss Liquid Lipcolour. Una barra de labios mate, ligera y aterciopelada con 10 horas de hidratación.  Gracias a su textura cremosa, similar a una mousse, aporta la cobertura necesaria de una sola pasada dejando un efecto difuminado de alto impacto.  Su textura cremosa proporciona una hidratación inmediata que se mantiene elástica sobre los labios durante todo el día, impidiendo que tus labios se resequen o descamen.  Cuenta con un aplicador en forma de reloj de arena perfecto para lograr una alta precisión.',

        'La base de maquillaje de larga duración y alta cobertura Infalible 32H Fresh Wear de LOréal Paris lo resiste todo y cuida tu piel con su fórmula antioxidante con vitamina C y SPF 25.   32 horas como recién aplicado. Su nueva fórmula con pigmentos finos ultra-concentrados que se adaptan perfectamente al tono de tu piel, permite conseguir una cobertura impecable que dura 32H, como recién aplicado. ¡Se te olvidará que lo llevas puesto!',

        '¡La base de maquillaje que estabas esperando! Infallible 24h Fresh To Wear de L`Oreal París ofrece una cobertura como nunca antes habías visto con un acabado muy natural. Su textura en polvo compacto es capaz de unificar el tono de la piel y difuminar todas las imperfecciones faciales. La duración es uno de sus puntos fuertes. ¡Olvídate de los retoques!',

        'El colorete en polvo de Nars es el imprescindible que no puede faltar en cualquier neceser de maquillaje. Estos icónicos productos nos ofrecen una amplia variedad de tonos naturales que sientan bien a todo tipo de pieles aportando un efecto de buena cara al instante. Gracias a sus fórmulas ricas en pigmentos micronizados, estos polvos ofrecen un color traslúcido y modulable que se integra fácilmente con cada pasada. ¡Disfruta del blush más vendido en Estados Unidos!',

        '¡Es la primera base de maquillaje que contiene un 90% de ingredientes que cuidan la piel, para un resultado luminoso y saludable! Su fórmula contiene sérum iluminador con: 2% de Niacinamida: Ilumina y reduce las manchas oscuras, los poros dilatados y la textura áspera de la piel. Ácido hialurónico: Rellena e hidrata instantáneamente el aspecto de la piel. Extracto de té verde: protege la piel de los agresores ambientales.',

        'Descubre la nueva máscara de pestañas Lash Idôle de Lancôme. La máscara más revolucionaria del mercado, que no se aglutina y que se enfoca en cada pestaña para obtener pestañas más completas, levantadas y extendidas al instante.',

        'Clarins Aceite de Labios Confort es una aceite con color que nutre, repara y proporciona a tus labios un brillo excepcional de inmediato. Su fórmula esta constituida por un coctel excepcional de aceites de jojoba bio, avellana y rosa mosqueta bio, que aporta a los labios una película hidratante, nutritiva, protectora y reparadora. Para todas las mujeres que buscan un producto que no solo realce sus labios, sino que también los cuide y embellezca y para aquellas que deseen añadir un brillo extra a su barra de labios habitual. Su fórmula ultraligera no es pegajosa, contiene un 93% de ingredientes de origen natural.',

        'Spray fijador de maquillaje que ilumina, hidrata y cuida tu piel.  Formulado con vitamina C y agua de cactus, el nuevo spray fijador le dará un jugoso giro a la icónica fórmula de Urban Decay. Este spray fijador no sólo mantiene el maquillaje en su sitio hasta 16 horas, sino que también cuida tu piel con ingredientes que la hidratarán y la revitalizarán para mantener una piel fresca y luminosa antes y después de maquillarte.',

        'Météorites Poudres Billes de Guerlain son toda una constelación de polvos multicolor diseñados para aportar un extra de luminosidad y frescor a nuestro rostro. Estas perlas están diseñadas bajo la tecnología Stardust, una técnica capaz de transformar la luz invisible en un auténtico destello. Su combinación de tonalidades y acabados reduce las rojeces, refresca el cutis, minimiza imperfecciones y atrapa la luz.   Sin duda un producto estrella que se ha convertido en todo un clásico imprescindible desde su nacimiento en 1987.',

        'SISLEY PHYTO EYE TWIST: Phyto Eye Twist es un maquillaje para los párpados \"todo en uno\": sombra, lápiz y eyeliner. Con una mina ultrasensorial, suave y fundente y una textura sensorial de muy larga duración.  Los jumbo de Sisley Phyto Eye Twist son waterproof, no se mueven de su sitio y se pueden combinar los tonos para crear un maquillaje a medida, o usar como base para una sombra en polvo.  Formato ultraligero, muy práctico, sin necesidad de sacapuntas, fácil de guardar en el neceser de maquillaje.  Diseño de cebra a juego con los Phyto Lip Twist y Phyto Blush Éclat de Sisley.',

        'El secreto de nuestros coleteros reside en su forma espiral. Debido a que distribuye la presión de manera uniforme en su cola de caballo, se obtiene un ajuste fuerte y cómodo. No deja rastros en tu cabello y es impermeable.',

        '1. DESENREDA: Con su estructura extra-flexible especialmente diseñada, podrás desenredar fácilmente tu melena sin tirones ni roturas.  2. MASAJEA Y EXFOLIA EL CUERO CABELLUDO: Sus púas se flexionan estimulando la raíz y el cuero cabelludo, incrementando el flujo sanguíneo y retirando las células muertas para favorecer el crecimiento del pelo y frenar su caída.  3. ANTIBACTERIAL: Propiedades antibacterianas debido a su novedoso material termoplástico y más fácil de limpiar por su estructura extraflexible.  4. ERGONÓMICO: Con su forma cóncava y extraflexible diseñado para adaptarse perfectamente a la forma de tu cabeza.  5. SECADO RÁPIDO: El diseño con ventilación abierta permite que la humedad se elimine de tu cabello más rápido y reduce el tiempo de secado. Se puede usar con secador manteniendo una distancia mínima de 15cm.',

        'Estos rulos pueden enrollar y rizar tu cabello fácilmente, creando ondas y rizos. Como no necesitan calor, son un buen sustituto de los productos de peinado térmico, ayudando a mantener tu cabello sano. No necesitas fijadores, ni planchas para rizos, solo necesitas tener el cabello húmedo, y....a usar los rulos en espiral para hacer unos rizos espectaculares.',

        'Set de clips con forma de pétalo y efecto rubber disponible en varios colores.  Medidas: 6.8 cm',

        'Vegano, libre de crueldad animal y sin gluten.  Esta mezcla súper concentrada de aceites de palma sostenibles, aloe nutritivo y aceite de coco ayuda a eliminar la suciedad, enjuaga y acondiciona tus herramientas más valiosas.  Las sutiles notas de lavanda calmante ayudan a elevar y eliminar el estrés. Una almohadilla de silicona texturizada elimina los residuos rebeldes.  La fórmula de grado profesional protege contra el 99,7% de los gérmenes hasta 24 horas después de la limpieza.  Fabricado en USA.',

        'Esponjas de maquillaje para aplicar bases fluidas y en crema.  Con textura ultrasuave, reparten de forma equilibrada el maquillaje. Para su uso, sumergirlas debajo del agua, escurrirlas y aplicar el producto sobre el rostro a toquecitos.',

        'Dispositivo de limpieza y masaje facial con filamentos de silicona para realizar una limpieza suave y profunda. Elimina la suciedad, grasa y restos de maquillaje.   Apto para todo tipo de pieles.   Resistente al agua, incluso se puede meter en la ducha.   Recargable con cable USB.',

        'Conjunto de 3 esponjas de ducha con encaje de polietileno suave.  Permiten la aplicación de un gel de ducha con ligera fricción sin irritar la piel, incluso las más delicadas. Ligeramente exfoliante, esta esponja de ducha ayuda a eliminar impurezas y células muertas, activa la regeneración celular, tonifica y suaviza la piel.',

        'Cepillo de silicona con diseño de doble cara. Por un lado, un cepillo con cerdas para limpiar la piel que sirve también de exfoliante suave diario. La otra cara del cepillo puede usarse como masajeador corporal, con la finalidad de estimular la circulación sanguínea y ayudar a reducir la celulitis en las zonas problemáticas.',

        'Set de 24 gomitas para el pelo irrompibles, no rompen el cabello ni dan tirones.  Medidas: Diámetro de 5,5cm aprox.',

        'Las maquinillas Venus ComfortGlide Breeze tienen 3 hojas para una depilación suave y apurada.  Los recambios para maquinilla vienen equipados con barras de gel incorporadas que liberan aceites corporales y una fragancia fresca para un deslizamiento cómodo e increíble.  Con un diseño pivotante que se ajusta a los contornos del cuerpo.  Todos los recambios Venus son compatibles con todos los mangos Venus (excepto Simply Venus y Venus para vello púbico).',

        'Una excelente selección de artículos personales e intransferibles, en un práctico neceser.  Ideal para llevar tus artículos de cuidado personal siempre contigo.'
    ];
        $category = ['Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Accesorio','Accesorio','Accesorio','Accesorio','Accesorio','Accesorio','Accesorio','Accesorio','Accesorio','Accesorio','Accesorio','Accesorio'];


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

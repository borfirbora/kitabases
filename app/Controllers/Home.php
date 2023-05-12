<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "anasayfa"
        ];
        return view('template/Head', $data)
            . view('template/Header')
            . view("Home")
            . view('template/Footer')
            . view("template/Foot");
    }

    public function hakkimizda()
    {
        $data = ["title" => "Hakkımızda", "text" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae explicabo recusandae unde quisquam, quibusdam qui totam consequuntur placeat esse, dolor consequatur impedit quaerat nostrum commodi perspiciatis, minus assumenda nemo! Animi facilis alias esse minus. Atque incidunt consequatur voluptates exercitationem quo ipsam ipsa quos dolorem eveniet rerum quas unde cupiditate, quam maiores nisi iure dicta in deserunt animi et, perspiciatis similique minus alias nam. Reiciendis maiores, quod dicta fuga incidunt vitae architecto quis eos adipisci laudantium sunt doloremque aut quos qui facilis hic? Vel, aut reprehenderit ullam eligendi quod non accusantium minima praesentium iusto eum minus beatae dicta, doloribus totam necessitatibus blanditiis, pariatur iste dignissimos vitae molestias! Cumque corporis aperiam ut quam quod veritatis aliquam. Illo aperiam saepe at repellendus, accusamus velit dolores soluta eos totam accusantium reiciendis quae. Ut quo eos ab reiciendis quisquam tempore facilis? Suscipit nesciunt deserunt blanditiis nemo corporis quibusdam tenetur, amet sequi? Expedita doloremque nulla temporibus officia, optio, repellat placeat dolores hic enim eius ipsa eos dolorem saepe voluptates sed delectus odio non asperiores reprehenderit aut maxime eaque eligendi. Magnam delectus fugit exercitationem minima ut deleniti dolor ratione a iste, facere minus distinctio. Reiciendis, nam ratione alias similique accusamus sapiente ipsa! Assumenda, inventore eligendi? Cum nemo impedit inventore, sit libero illum delectus molestiae voluptatum natus officia accusantium deserunt fugit accusamus doloremque assumenda eos! Autem vitae, aperiam, aspernatur quas voluptatum rem dolorum officiis sunt consequatur soluta velit nesciunt, tempora magnam. Voluptatibus molestias assumenda laudantium illum labore? Voluptas adipisci aliquam maiores alias accusantium. Iure quia nihil ipsum excepturi voluptatem eum aliquam, recusandae explicabo totam est maxime esse natus sunt beatae quas consequuntur modi possimus! In doloribus officiis maiores perferendis cumque facilis suscipit optio nam exercitationem, fuga perspiciatis quidem placeat vel quod quo quasi sit harum consequatur ratione animi. Aspernatur dolorem vel in eius optio nulla sed eaque nesciunt perferendis, sequi totam quaerat commodi ipsa officiis, numquam ad minus! Tempore quod dicta quaerat molestiae quis quibusdam magni aspernatur nemo eligendi architecto natus deserunt cupiditate magnam, placeat debitis quas et dolore repellendus itaque. Voluptates natus ut, excepturi tempore sequi alias dolores similique ea eligendi animi deleniti asperiores laudantium aliquid ullam veritatis fugit quasi totam reprehenderit? Optio voluptas nam, delectus tempora quam impedit praesentium est sunt voluptates repellat perferendis quidem accusantium? Ipsa fugiat, accusamus itaque aliquam laborum ducimus mollitia debitis. Quae, dolore veniam temporibus quam consequuntur maxime aspernatur velit eius ipsa sit numquam illo nihil tempore nam porro rem ipsum magni accusantium commodi. Labore dolore atque voluptatum delectus molestias magni nobis eius alias sunt eum eligendi fugiat reprehenderit, est rem autem iusto voluptas quia officiis odit repellendus? Fugit totam optio maiores debitis dolore voluptatibus natus illum aut sed. Veniam provident necessitatibus unde nihil culpa itaque accusantium obcaecati dolorem laborum totam nisi ratione ducimus, magni, eveniet et impedit. Est facilis dolor reiciendis aliquam quas sint! Quasi nesciunt repudiandae beatae obcaecati quidem nihil aperiam, perferendis delectus veritatis nisi quia debitis optio, quam facilis sequi ipsam molestiae consequatur consectetur? Nisi, corporis praesentium autem iste porro magni voluptate doloremque ullam natus. Incidunt deserunt dignissimos aspernatur?</p>"];
        return view('template/Head', $data)
            . view('template/Header')
            . view("Hakkimizda")
            . view('template/Footer')
            . view("template/Foot");
    }

    public function kvkk()
    {
        $data = ["title" => "Kişisel Verilerin Korunması", "text" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae explicabo recusandae unde quisquam, quibusdam qui totam consequuntur placeat esse, dolor consequatur impedit quaerat nostrum commodi perspiciatis, minus assumenda nemo! Animi facilis alias esse minus. Atque incidunt consequatur voluptates exercitationem quo ipsam ipsa quos dolorem eveniet rerum quas unde cupiditate, quam maiores nisi iure dicta in deserunt animi et, perspiciatis similique minus alias nam. Reiciendis maiores, quod dicta fuga incidunt vitae architecto quis eos adipisci laudantium sunt doloremque aut quos qui facilis hic? Vel, aut reprehenderit ullam eligendi quod non accusantium minima praesentium iusto eum minus beatae dicta, doloribus totam necessitatibus blanditiis, pariatur iste dignissimos vitae molestias! Cumque corporis aperiam ut quam quod veritatis aliquam. Illo aperiam saepe at repellendus, accusamus velit dolores soluta eos totam accusantium reiciendis quae. Ut quo eos ab reiciendis quisquam tempore facilis? Suscipit nesciunt deserunt blanditiis nemo corporis quibusdam tenetur, amet sequi? Expedita doloremque nulla temporibus officia, optio, repellat placeat dolores hic enim eius ipsa eos dolorem saepe voluptates sed delectus odio non asperiores reprehenderit aut maxime eaque eligendi. Magnam delectus fugit exercitationem minima ut deleniti dolor ratione a iste, facere minus distinctio. Reiciendis, nam ratione alias similique accusamus sapiente ipsa! Assumenda, inventore eligendi? Cum nemo impedit inventore, sit libero illum delectus molestiae voluptatum natus officia accusantium deserunt fugit accusamus doloremque assumenda eos! Autem vitae, aperiam, aspernatur quas voluptatum rem dolorum officiis sunt consequatur soluta velit nesciunt, tempora magnam. Voluptatibus molestias assumenda laudantium illum labore? Voluptas adipisci aliquam maiores alias accusantium. Iure quia nihil ipsum excepturi voluptatem eum aliquam, recusandae explicabo totam est maxime esse natus sunt beatae quas consequuntur modi possimus! In doloribus officiis maiores perferendis cumque facilis suscipit optio nam exercitationem, fuga perspiciatis quidem placeat vel quod quo quasi sit harum consequatur ratione animi. Aspernatur dolorem vel in eius optio nulla sed eaque nesciunt perferendis, sequi totam quaerat commodi ipsa officiis, numquam ad minus! Tempore quod dicta quaerat molestiae quis quibusdam magni aspernatur nemo eligendi architecto natus deserunt cupiditate magnam, placeat debitis quas et dolore repellendus itaque. Voluptates natus ut, excepturi tempore sequi alias dolores similique ea eligendi animi deleniti asperiores laudantium aliquid ullam veritatis fugit quasi totam reprehenderit? Optio voluptas nam, delectus tempora quam impedit praesentium est sunt voluptates repellat perferendis quidem accusantium? Ipsa fugiat, accusamus itaque aliquam laborum ducimus mollitia debitis. Quae, dolore veniam temporibus quam consequuntur maxime aspernatur velit eius ipsa sit numquam illo nihil tempore nam porro rem ipsum magni accusantium commodi. Labore dolore atque voluptatum delectus molestias magni nobis eius alias sunt eum eligendi fugiat reprehenderit, est rem autem iusto voluptas quia officiis odit repellendus? Fugit totam optio maiores debitis dolore voluptatibus natus illum aut sed. Veniam provident necessitatibus unde nihil culpa itaque accusantium obcaecati dolorem laborum totam nisi ratione ducimus, magni, eveniet et impedit. Est facilis dolor reiciendis aliquam quas sint! Quasi nesciunt repudiandae beatae obcaecati quidem nihil aperiam, perferendis delectus veritatis nisi quia debitis optio, quam facilis sequi ipsam molestiae consequatur consectetur? Nisi, corporis praesentium autem iste porro magni voluptate doloremque ullam natus. Incidunt deserunt dignissimos aspernatur?</p>"];
        return view('template/Head', $data)
            . view('template/Header')
            . view("KVKK")
            . view('template/Footer')
            . view("template/Foot");
    }

    public function uyeliksozlesmesi()
    {
        $data = ["title" => "Üyelik Sözleşmesi", "text" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae explicabo recusandae unde quisquam, quibusdam qui totam consequuntur placeat esse, dolor consequatur impedit quaerat nostrum commodi perspiciatis, minus assumenda nemo! Animi facilis alias esse minus. Atque incidunt consequatur voluptates exercitationem quo ipsam ipsa quos dolorem eveniet rerum quas unde cupiditate, quam maiores nisi iure dicta in deserunt animi et, perspiciatis similique minus alias nam. Reiciendis maiores, quod dicta fuga incidunt vitae architecto quis eos adipisci laudantium sunt doloremque aut quos qui facilis hic? Vel, aut reprehenderit ullam eligendi quod non accusantium minima praesentium iusto eum minus beatae dicta, doloribus totam necessitatibus blanditiis, pariatur iste dignissimos vitae molestias! Cumque corporis aperiam ut quam quod veritatis aliquam. Illo aperiam saepe at repellendus, accusamus velit dolores soluta eos totam accusantium reiciendis quae. Ut quo eos ab reiciendis quisquam tempore facilis? Suscipit nesciunt deserunt blanditiis nemo corporis quibusdam tenetur, amet sequi? Expedita doloremque nulla temporibus officia, optio, repellat placeat dolores hic enim eius ipsa eos dolorem saepe voluptates sed delectus odio non asperiores reprehenderit aut maxime eaque eligendi. Magnam delectus fugit exercitationem minima ut deleniti dolor ratione a iste, facere minus distinctio. Reiciendis, nam ratione alias similique accusamus sapiente ipsa! Assumenda, inventore eligendi? Cum nemo impedit inventore, sit libero illum delectus molestiae voluptatum natus officia accusantium deserunt fugit accusamus doloremque assumenda eos! Autem vitae, aperiam, aspernatur quas voluptatum rem dolorum officiis sunt consequatur soluta velit nesciunt, tempora magnam. Voluptatibus molestias assumenda laudantium illum labore? Voluptas adipisci aliquam maiores alias accusantium. Iure quia nihil ipsum excepturi voluptatem eum aliquam, recusandae explicabo totam est maxime esse natus sunt beatae quas consequuntur modi possimus! In doloribus officiis maiores perferendis cumque facilis suscipit optio nam exercitationem, fuga perspiciatis quidem placeat vel quod quo quasi sit harum consequatur ratione animi. Aspernatur dolorem vel in eius optio nulla sed eaque nesciunt perferendis, sequi totam quaerat commodi ipsa officiis, numquam ad minus! Tempore quod dicta quaerat molestiae quis quibusdam magni aspernatur nemo eligendi architecto natus deserunt cupiditate magnam, placeat debitis quas et dolore repellendus itaque. Voluptates natus ut, excepturi tempore sequi alias dolores similique ea eligendi animi deleniti asperiores laudantium aliquid ullam veritatis fugit quasi totam reprehenderit? Optio voluptas nam, delectus tempora quam impedit praesentium est sunt voluptates repellat perferendis quidem accusantium? Ipsa fugiat, accusamus itaque aliquam laborum ducimus mollitia debitis. Quae, dolore veniam temporibus quam consequuntur maxime aspernatur velit eius ipsa sit numquam illo nihil tempore nam porro rem ipsum magni accusantium commodi. Labore dolore atque voluptatum delectus molestias magni nobis eius alias sunt eum eligendi fugiat reprehenderit, est rem autem iusto voluptas quia officiis odit repellendus? Fugit totam optio maiores debitis dolore voluptatibus natus illum aut sed. Veniam provident necessitatibus unde nihil culpa itaque accusantium obcaecati dolorem laborum totam nisi ratione ducimus, magni, eveniet et impedit. Est facilis dolor reiciendis aliquam quas sint! Quasi nesciunt repudiandae beatae obcaecati quidem nihil aperiam, perferendis delectus veritatis nisi quia debitis optio, quam facilis sequi ipsam molestiae consequatur consectetur? Nisi, corporis praesentium autem iste porro magni voluptate doloremque ullam natus. Incidunt deserunt dignissimos aspernatur?</p>"];
        return view('template/Head', $data)
            . view('template/Header')
            . view("UyelikSozlesmesi")
            . view('template/Footer')
            . view("template/Foot");
    }

    public function iletisim()
    {
        $data = ["title" => "Üyelik Sözleşmesi", "text" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae explicabo recusandae unde quisquam, quibusdam qui totam consequuntur placeat esse, dolor consequatur impedit quaerat nostrum commodi perspiciatis, minus assumenda nemo! Animi facilis alias esse minus. Atque incidunt consequatur voluptates exercitationem quo ipsam ipsa quos dolorem eveniet rerum quas unde cupiditate, quam maiores nisi iure dicta in deserunt animi et, perspiciatis similique minus alias nam. Reiciendis maiores, quod dicta fuga incidunt vitae architecto quis eos adipisci laudantium sunt doloremque aut quos qui facilis hic? Vel, aut reprehenderit ullam eligendi quod non accusantium minima praesentium iusto eum minus beatae dicta, doloribus totam necessitatibus blanditiis, pariatur iste dignissimos vitae molestias! Cumque corporis aperiam ut quam quod veritatis aliquam. Illo aperiam saepe at repellendus, accusamus velit dolores soluta eos totam accusantium reiciendis quae. Ut quo eos ab reiciendis quisquam tempore facilis? Suscipit nesciunt deserunt blanditiis nemo corporis quibusdam tenetur, amet sequi? Expedita doloremque nulla temporibus officia, optio, repellat placeat dolores hic enim eius ipsa eos dolorem saepe voluptates sed delectus odio non asperiores reprehenderit aut maxime eaque eligendi. Magnam delectus fugit exercitationem minima ut deleniti dolor ratione a iste, facere minus distinctio. Reiciendis, nam ratione alias similique accusamus sapiente ipsa! Assumenda, inventore eligendi? Cum nemo impedit inventore, sit libero illum delectus molestiae voluptatum natus officia accusantium deserunt fugit accusamus doloremque assumenda eos! Autem vitae, aperiam, aspernatur quas voluptatum rem dolorum officiis sunt consequatur soluta velit nesciunt, tempora magnam. Voluptatibus molestias assumenda laudantium illum labore? Voluptas adipisci aliquam maiores alias accusantium. Iure quia nihil ipsum excepturi voluptatem eum aliquam, recusandae explicabo totam est maxime esse natus sunt beatae quas consequuntur modi possimus! In doloribus officiis maiores perferendis cumque facilis suscipit optio nam exercitationem, fuga perspiciatis quidem placeat vel quod quo quasi sit harum consequatur ratione animi. Aspernatur dolorem vel in eius optio nulla sed eaque nesciunt perferendis, sequi totam quaerat commodi ipsa officiis, numquam ad minus! Tempore quod dicta quaerat molestiae quis quibusdam magni aspernatur nemo eligendi architecto natus deserunt cupiditate magnam, placeat debitis quas et dolore repellendus itaque. Voluptates natus ut, excepturi tempore sequi alias dolores similique ea eligendi animi deleniti asperiores laudantium aliquid ullam veritatis fugit quasi totam reprehenderit? Optio voluptas nam, delectus tempora quam impedit praesentium est sunt voluptates repellat perferendis quidem accusantium? Ipsa fugiat, accusamus itaque aliquam laborum ducimus mollitia debitis. Quae, dolore veniam temporibus quam consequuntur maxime aspernatur velit eius ipsa sit numquam illo nihil tempore nam porro rem ipsum magni accusantium commodi. Labore dolore atque voluptatum delectus molestias magni nobis eius alias sunt eum eligendi fugiat reprehenderit, est rem autem iusto voluptas quia officiis odit repellendus? Fugit totam optio maiores debitis dolore voluptatibus natus illum aut sed. Veniam provident necessitatibus unde nihil culpa itaque accusantium obcaecati dolorem laborum totam nisi ratione ducimus, magni, eveniet et impedit. Est facilis dolor reiciendis aliquam quas sint! Quasi nesciunt repudiandae beatae obcaecati quidem nihil aperiam, perferendis delectus veritatis nisi quia debitis optio, quam facilis sequi ipsam molestiae consequatur consectetur? Nisi, corporis praesentium autem iste porro magni voluptate doloremque ullam natus. Incidunt deserunt dignissimos aspernatur?</p>"];
        return view('template/Head', $data)
            . view('template/Header')
            . view("iletisim")
            . view('template/Footer')
            . view("template/Foot");
    }
}
<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('nightfall', function(){
    return Inertia::render('Nightfall/Test');
});

Route::get('about', function(){
    $description='Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, accusantium iste id sed ut quos natus facere laborum nam provident voluptatibus eius nesciunt autem non ea laudantium fugiat modi porro harum sequi quis! Dolore mollitia cupiditate, vitae eligendi aliquid rerum sint aliquam libero quos dicta id quam tempore consequatur omnis eum. Doloremque assumenda, harum ex maiores sit porro expedita fuga cumque amet facilis odit unde, repudiandae consectetur, cupiditate iusto. Numquam ex unde eligendi libero odit est maiores rem quibusdam debitis dolorum enim neque quisquam ad cum ipsam voluptates, sint aut nobis quidem, magni, soluta assumenda officia beatae nemo! Dolorem tempora id quia modi excepturi ducimus repudiandae ex nisi dolore iusto a atque velit corporis iste eaque, ratione assumenda omnis illum pariatur porro corrupti sapiente vero, impedit harum. Fugit voluptates quia nisi! Assumenda voluptates doloribus totam et illum, veritatis hic nemo iusto, voluptas corrupti libero deserunt, earum dolorem vel amet excepturi ratione maiores nam quisquam voluptatum. Quia id totam debitis dignissimos quaerat veniam, minima dolore asperiores cumque est, blanditiis exercitationem, commodi qui! Officia suscipit recusandae ratione debitis corporis non nemo similique asperiores nostrum praesentium. Minus aperiam, deleniti amet dignissimos eos ipsum sint eligendi, consectetur hic accusantium laudantium perspiciatis vel rem dolore';
    $listItem = [
        ['text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ipsa amet ab iusto voluptatem distinctio illum deserunt est maiores odio qui error, sunt cum labore fuga, animi temporibus sapiente vero?'],
        ['text'=>'Numquam consectetur cupiditate sapiente incidunt recusandae omnis non rem aliquam ipsum dolorum reiciendis sed, vitae molestiae. Numquam sapiente dolorem corrupti unde provident quasi ipsam, quae commodi quidem ex placeat quos!'],
        ['text'=>'Quis, id eligendi nemo iusto, a beatae veritatis quasi eius ab voluptas velit. Dignissimos, molestias, laboriosam soluta modi ducimus aspernatur accusantium vitae cupiditate saepe, voluptates in rem harum. Praesentium, a.'],
        ['text'=>'Repudiandae placeat obcaecati esse iste vero recusandae animi possimus dolor libero mollitia consequuntur debitis nostrum odit quam qui id sunt magnam ea ipsam numquam ex, maiores doloribus praesentium. Ex, reiciendis?'],
        ['text'=>'Aliquam dolores, odio est aut iusto animi quidem quasi. Dignissimos perspiciatis consequuntur nostrum ut omnis, consequatur veritatis, ab voluptatum adipisci ea sit dolores amet sequi inventore quaerat reprehenderit nesciunt laudantium?'],
        ['text'=>'Sed maxime inventore quia dicta facere ipsum cumque quisquam facilis quibusdam labore ea velit repudiandae nesciunt itaque, libero quam ullam. Odit enim eos accusantium veritatis explicabo ex culpa voluptatem possimus.'],
        ['text'=>'Doloribus eligendi nostrum minima voluptates labore praesentium dolor fugiat? Quaerat rem iusto excepturi perferendis minus quae totam dolorum qui magnam nulla laboriosam numquam, beatae voluptatum. Soluta iusto recusandae quia itaque!'],
        ['text'=>'Ullam officia nostrum possimus quasi veniam nisi quod laudantium quisquam, provident illo aperiam nobis fugit eligendi delectus deleniti. Repudiandae labore facilis repellat dolorum exercitationem odit voluptate odio iusto vel debitis!'],
        ['text'=>'Porro quae dignissimos fugiat modi! Accusantium illo ipsa quos officiis quasi natus tempora sed, est impedit voluptatum quam ratione laborum ex dicta commodi possimus ab, odio placeat nemo culpa at?'],
        ['text'=>'Iste, velit sequi eaque tenetur sunt accusantium assumenda repellendus. Placeat officiis, ipsum omnis pariatur ullam nostrum eligendi! Delectus id, voluptas quam aperiam qui numquam, exercitationem soluta ab hic, magnam nihil!'],
        ['text'=>'Recusandae laboriosam eaque nulla necessitatibus molestiae alias saepe placeat, accusantium voluptatem quisquam commodi sunt itaque esse expedita fuga harum consectetur doloremque dolore accusamus velit debitis sint quam ipsa! Saepe, quo!'],
        ['text'=>'Ad fugit ipsa, tenetur asperiores eveniet ut molestias eos consequuntur quia temporibus atque! Dolore maxime, eum porro quam recusandae voluptatibus harum laborum doloremque, illo explicabo assumenda quas veritatis blanditiis aliquam!'],
        ['text'=>'Eius expedita iure debitis obcaecati aliquid perspiciatis tenetur, aliquam saepe perferendis! Mollitia, cum? Saepe commodi dolor error quam aperiam, recusandae ipsum non reprehenderit voluptate? Itaque fugiat commodi repudiandae nobis temporibus.'],
        ['text'=>'Vel nobis dolore facilis amet exercitationem sit iure tenetur expedita sequi ea, eos asperiores iste atque modi perspiciatis optio voluptatem vitae soluta, excepturi hic harum deleniti error est? Qui, placeat!'],
        ['text'=>'Tempore hic impedit provident, rerum aperiam nam in eos, sequi expedita at, recusandae quas minima dicta nisi vitae odit consequuntur repellendus quidem sint delectus ipsa voluptatum cumque! Itaque, odit omnis?'],
        ['text'=>'Vitae amet consequuntur possimus laborum perspiciatis debitis velit perferendis qui dolore assumenda porro corporis placeat reprehenderit temporibus eos totam rem, impedit culpa magnam voluptatum soluta consequatur ducimus nobis. Incidunt, similique?'],
        ['text'=>'Quidem magni porro modi adipisci blanditiis sit, labore neque dolores maxime cumque consequatur ratione corporis, ullam dignissimos commodi tempora. Distinctio exercitationem nemo aperiam iusto mollitia? Delectus itaque soluta pariatur omnis?'],
        ['text'=>'Sequi officiis sunt modi! Quaerat asperiores illum, dolorem sed sit labore iure, eveniet accusantium amet blanditiis officia. Illum, assumenda architecto sed porro optio, eligendi atque minus eveniet sequi dolore praesentium.'],
        ['text'=>'Dolorum illum ad consectetur expedita distinctio fuga dignissimos laborum velit quasi, iusto sequi ullam repudiandae perspiciatis eveniet impedit ut magni? Porro dignissimos iste nihil vitae debitis facilis quos, provident omnis.'],
        ['text'=>'Excepturi aspernatur, ducimus quam neque doloribus voluptatum eligendi ab cumque consequatur eos magnam et vitae delectus possimus adipisci corporis maxime dolorum recusandae mollitia. Ea fuga debitis exercitationem nulla suscipit nobis.'],
    ];
    return Inertia::render('Nightfall/About',compact('description','listItem'));
})->name('about');


Route::get('test', function(){
    return Inertia::render('Nightfall/Themes/Alerts/Theme');
});
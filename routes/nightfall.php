<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('nightfall', function(){
    return Inertia::render('Nightfall/Test');
});

Route::get('about', function(){
    $descripcion='<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, accusantium iste id sed ut quos natus facere laborum nam provident voluptatibus eius nesciunt autem non ea laudantium fugiat modi porro harum sequi quis! Dolore mollitia cupiditate, vitae eligendi aliquid rerum sint aliquam libero quos dicta id quam tempore consequatur omnis eum. Doloremque assumenda, harum ex maiores sit porro expedita fuga cumque amet facilis odit unde, repudiandae consectetur, cupiditate iusto. Numquam ex unde eligendi libero odit est maiores rem quibusdam debitis dolorum enim neque quisquam ad cum ipsam voluptates, sint aut nobis quidem, magni, soluta assumenda officia beatae nemo! Dolorem tempora id quia modi excepturi ducimus repudiandae ex nisi dolore iusto a atque velit corporis iste eaque, ratione assumenda omnis illum pariatur porro corrupti sapiente vero, impedit harum. Fugit voluptates quia nisi! Assumenda voluptates doloribus totam et illum, veritatis hic nemo iusto, voluptas corrupti libero deserunt, earum dolorem vel amet excepturi ratione maiores nam quisquam voluptatum. Quia id totam debitis dignissimos quaerat veniam, minima dolore asperiores cumque est, blanditiis exercitationem, commodi qui! Officia suscipit recusandae ratione debitis corporis non nemo similique asperiores nostrum praesentium. Minus aperiam, deleniti amet dignissimos eos ipsum sint eligendi, consectetur hic accusantium laudantium perspiciatis vel rem dolore?</p>
    ';
    return Inertia::render('Nightfall/About', compact($descripcion));
})->name('about');
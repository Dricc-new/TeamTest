<script setup>
    import Button2 from '@/Components/Nightfall/Button2.vue'
    const props = defineProps({
        list: Object,   
        
    });


    const listtable = [
        {text:' temporibus sapiente vero?', text2:'loremsadaf', text3: 'loremsadaf', text4:'loremsadaf'},
        {text:'  ex placeat quos!', text2:'loremsadaf', text3: 'loremsadaf', text4:'loremsadaf'},
        {text:'in rem harum. Praesentium, a.', text2:'loremsadaf', text3: 'loremsadaf', text4:'loremsadaf'},
        {text:'Ex, reiciendis?', text2:'loremsadaf', text3: 'loremsadaf', text4:'loremsadaf'},
        {text:' nesciunt laudantium?', text2:'loremsadaf', text3: 'loremsadaf', text4:'loremsadaf'},
        {text:'  voluptatem possimus.', text2:'loremsadaf', text3: 'loremsadaf', text4:'loremsadaf'},
        {text:'usandae quia itaque!', text2:'loremsadaf', text3: 'loremsadaf', text4:'loremsadaf'},
        {text:' vel debitis!', text2:'loremsadaf', text3: 'loremsadaf', text4:'loremsadaf'},
        {text:' placeat nemo culpa at?', text2:'loremsadaf', text3: 'loremsadaf', text4:'loremsadaf'},
    ];

</script>

<template>

    <div class="bg-gray-400 m-4">
        <div class="DTable bg-gray-100 m-4 w-4/5">
            <h2 class="text-2xl DFont p-4">
                Query Analyticla
            </h2>                
            <table class="table-auto">
                <thead class="text-left bg-gray-900 p-10 DColorHeader">
                    <tr class="h-2">
                        <th class="DColorBorder border-r py-2">
                            <h2>QUERY</h2>
                        </th>
                        <th class="DColorBorder border-r py-2">
                            <h2> CLICKS</h2>
                        </th>
                        <th class="DColorBorder border-r py-2">
                            <h2>IMPRESS</h2>
                        </th>
                        <th class="DColorBorder border-r py-2">
                            <h2>CTR</h2>
                        </th>
                        <th class="DColorBorder border-r py-2 pr-4">
                            <h2 class="">SEO CAMPAIGN</h2>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in listtable">
                        <td class="px-4">
                            {{ item.text }}
                        </td>

                        <td class="px-4">
                            {{ item.text2 }}
                        </td>

                        <td class="px-4">
                            {{ item.text3 }}
                        </td>

                        <td class="px-4">
                            {{ item.text4 }}
                        </td>

                        <td>
                            
                        </td>
                    </tr>

                    <!-- <tr>
                        <td>
                            <h2>tools for seo specialits</h2> 
                        </td>
                        <td>
                            <h2>235</h2> 
                        </td>
                        <td>
                            <h2>1200</h2>
                        </td>
                        <td>
                            <h2>16.5%</h2>
                        </td>
                        <td>
                            <button>+ADD</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h2>best seo tools</h2>
                        </td>
                        <td>
                            <h2>217</h2>
                        </td>
                        <td>
                            <h2>950</h2>
                        </td>
                        <td>
                            <h2>18.2%</h2>
                        </td>
                        <td>
                            <button>+ADD</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h2>seo competitors</h2>
                        </td>
                        <td>
                            <h2>197</h2>
                        </td>
                        <td>
                            <h2>603</h2>
                        </td>
                        <td>
                            <h2>14.1%</h2>
                        </td>
                        <td>
                            <button>+ADD</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h2>comprehensive seo tools</h2>
                        </td>
                        <td>
                            <h2>130</h2>
                        </td>
                        <td>
                            <h2>548</h2>
                        </td>
                        <td>
                            <h2>19.8%</h2>
                        </td>
                        <td>
                            <button>+ADD</button>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>

</template>
<style>
    /* @font-face {
        font-family: 'Quicksand', sans-serif;
        src: url('https://teamtest.test/font/Quicksand-VariableFont_wght.ttf');
        font-style: normal;
        font-weight: normal;
    } */
    .DTable{
        
    }

    .DTable table thead th h2{
        @apply border-l border-gray-500 w-full my-2 text-center;
    }

    .DTable table thead th:first-child h2{
        @apply border-l-0;
    }
    
    .DTable table tbody tr{
        @apply border-b-2;
    }
    
    .DTable table tbody tr:last-child{
        @apply border-b-0;
    }

    .DTable table tbody td button{
        @apply hover:bg-gray-200 transition ease-in-out duration-200;
    }

    .DFont{
        font-family: 'Quicksand', sans-serif;
    }
    .DColorHeader{
        background-color: #e2e8f0;
    }
/*     .DColorBorder{
        border-color: #cbd5e1;
        border-spacing: 10px;
    } */
</style>
<!-- 
    <div class="DTable lg:col-span-3">
        <h1 class="DTable-Header text-2xl">Element List</h1>
        <div class="DTable2 px-0 scrollbar">

            <div class="DTable3">
                <div class="DTable3-3">
                    <div class="DTable3-3-1">
                        <div class="DTable3-3-1-1">
                            <div class="DTable3-3-1-1-1">

                            </div>
                        </div>
                    </div>
                    <div class="DTable3-3-2">
                        <div class="DTable3-3-2-1">
                            <div class="DTable3-3-2-1-1">
                                <div class="DTable3-3-2-1-1-1">
                                    <table class="DActualTable1">
                                        <thead>
                                            <tr class="DTr">
                                                <th class="DTh">
                                                    Query
                                                </th>
                                                <th class="DTh">
                                                    Clicks
                                                </th>
                                                <th class="DTh">
                                                    Impress
                                                </th>
                                                <th class="DTh">
                                                    Ctr
                                                </th>
                                                <th class="DTh text-center">
                                                    Seo Campaign
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="DTBodyTr">
                                                <td class="DTBodyTd1">
                                                    tools for seo specialists
                                                </td>
                                                <td class="DTBodyTd">
                                                    235
                                                </td>
                                                <td class="DTBodyTd">
                                                    1470
                                                </td>
                                                <td class="DTBodyTd">
                                                    16.5%
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="DTable4"></div>
            <div class="DTable5"></div>

        </div>
    </div>
</template>

<style scoped>
    .DTable{
        border-radius: 0.25rem;
        background-color: rgb(248 250 252 / 1);
    }
    .DTable-Header{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem 1.25rem 0.5rem;
    }

    .DTable2{
        position: relative;
        padding: 0.875rem 1.25rem 1rem;
    }
    .DTable3{
        overflow: hidden;
        width: inherit;
        height: inherit;
        max-width: inherit;
        max-height: inherit;
        margin: -12.25px 0px -14px;
    }
    .DTable3-3{
        margin: -12.25px 0px -14px;
        overflow: hidden;
        width: inherit;
        height: inherit;
        max-width: inherit;
        max-height: inherit;
    }
    .DTable3-3-1{
        box-sizing: inherit!important;
        height: 100%;
        width: 100%;
        max-width: 1px;
        position: relative;
        float: left;
        max-height: 1px;
        overflow: hidden;
        z-index: -1;
        padding: 0;
        margin: 0;
        pointer-events: none;
    }
    .DTable3-3-1-1{
        box-sizing: inherit!important;
        height: 100%;
        width: 100%;
        max-width: 1px;
        position: relative;
        float: left;
        max-height: 1px;
        overflow: hidden;
        z-index: -1;
        padding: 0;
        margin: 0;
        pointer-events: none;
    }
    .DTable3-3-1-1-1{
        box-sizing: inherit;
        display: block;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        height: 1000%;
        width: 1000%;
        min-height: 1px;
        min-width: 1px;
        overflow: hidden;
        pointer-events: none;
        z-index: -1;
    }

    .DTable3-3-2{
        direction: inherit;
        position: absolute;
        overflow: hidden;
        padding: 0;
        margin: 0;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        width: auto!important;
        height: auto!important;
        z-index: 0;
    }
    .DTable3-3-2-1{
        right: 0px;
        bottom: 0px;
        direction: inherit!important;
        box-sizing: inherit!important;
        resize: none!important;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        padding: 0;
        margin: 0;
        -webkit-overflow-scrolling: touch;
    }
    .DTable3-3-2-1-1{
        height: auto;
        overflow: scroll hidden;
        direction: inherit;
        box-sizing: border-box!important;
        position: relative;
        display: block;
        height: 100%;
        width: auto;
        max-width: 100%;
        max-height: 100%;
    }
    .DTable3-3-2-1-1-1{
        padding: 12.25px 0px 14px;
    }
    .DActualTable1{
        display: table;
        width: 100%;
        background-color: 248 250 252;
        text-align: left;
        color: 71 85 105;
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse;
    }
    .DTr{
        background-color: 255 255 255;
    }
    .DTh{
        padding-left: 2rem;
        position: relative;
        font-size: .875rem;
        line-height: 1.25rem;
        font-weight: 700;
        text-transform: uppercase;
    }
    .DTBodyTr{
        border-bottom-width: 1px;
        border-color: 203 213 225;
    }
    .DTBodyTd1{
        padding-left: 2rem;
        padding-right: 1.5rem;
        padding-top: .75rem;
        padding-bottom: .75rem;
    }
    .DTBodyTd{
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        padding-top: .75rem;
        padding-bottom: .75rem;
    }


    .DTable4{
        visibility: visible;
        left: 0;
        height: 11px;
        z-index: 1;
        position: absolute;
        right: 0;
        bottom: 0;
        pointer-events: none;
        overflow: hidden;
    }

    .DTable5{
        visibility: hidden;
        top: 0;
        width: 11px;
        z-index: 1;
        position: absolute;
        right: 0;
        bottom: 0;
        pointer-events: none;
        overflow: hidden;
    }
</style>/

 -->
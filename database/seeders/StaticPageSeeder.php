<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $pages = [
        //     [
        //     'title_uz' => 'Биз ҳақимизда',
        //     'title_ru' => '',
        //     'title_en' => '',

        //     'sub_title_uz' => '',
        //     'sub_title_ru' => '',
        //     'sub_title_en' => '',

        //     'text_uz' => 'Эркин иқтисодий зона - минтақани жадал ижтимоий-иқтисодий ривожлантириш учун мамлакат ва чет эл капиталини, истиқболли технология ва бошқарув тажрибасини жалб этиш мақсадида тузиладиган, аниқ белгиланган маъмурий чегаралари ва алоҳида ҳуқуқий тартиботи бўлган махсус ажратилган ҳудуд. Эркин иқтисодий зонада махсус солиқ ва божхона имтиёзлари, кафолатланган муҳандислик-коммуникация инфратузилмаси, эркин иқтисодий фаолият ва бизнесни ташкил этишни рағбатлантириш учун юқори сифатли маъмурий хизматлар мавжуд. “Жиззах” эркин иқтисодий зонаси 2013 йил 18 мартда ташкил этилган. “Жиззах” ЭИЗнинг умумий майдони 514 гектарни ташкил этади',
        //     'text_ru' => '',
        //     'text_en' => '',

        //     'slug' => '',
        //     'image' => '',
        //     'type' => '',

        //     'user_id' => '1',
        //     ],
        // ];

        // StaticPage::insert($pages);

        StaticPage::factory()->times(20)->create();
    }
}

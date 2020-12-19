<?php

namespace app\modules\v1\controllers;

class NewsController extends ApiController {
   public function actionCatalog() {
       $News = [
           [
               'id' => 1,
               'name' => 'В Индии отреставрировали самую большую картину Василия Верещагина',
               'url' => 'Картина Верищагина',
               'image' => 'https://artinvestment.ru/content/download/news_2020/20201130_Vereschagin.jpg',
               'autor' => 'Мария Романова',
               'date' => '28.11.2020',
               'shirtTxt' => 'Полотно «Шествие слонов…» индийского цикла Верещагина размером 5 × 7 метров было представлено в Мемориальном музее Виктории в Калькутте',
           ],
           [
               'id' => 2,
               'name' => 'Составлен реестр частных музеев России',
               'url' => 'Реестр музеев России',
               'image' => 'https://artinvestment.ru/content/download/news_2020/20201127_RusIconMuseum.jpg',
               'autor' => 'Игорь Тихов',
               'date' => '13.12.2020',
               'shirtTxt' => 'Министерство культуры составило государственный реестр частных музеев, в коллекциях которых есть предметы Музейного фонда России.',
           ],
           [
               'id' => 3,
               'name' => 'В Шанхае провели две живые арт-ярмарки',
               'url' => 'Арт-ярмарки в Шанхае',
               'image' => 'https://artinvestment.ru/content/download/news_2020/20201116_Shankhai_fairs.jpg',
               'autor' => 'Илья Третьяков',
               'date' => '16.11.2020',
               'shirtTxt' => 'Западным дилерам по прилету в Шанхай пришлось просидеть две недели в карантине, чтобы быть допущенными к двум из немногих живых ярмарок этого года — ART021 и West Bund Art & Design',
           ]
       ];

       return $News;
   }
}

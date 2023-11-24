<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        $data = [
            [
                "id" => "1",
                "link" => "https://shope.ee/A9qg1YfzSN",
                "img" => "1_BSR_18.jpg",
                "nama" => "1.DRESS CASUAL BEAR(BSR-18)"
            ],[
                "id" => "2",
                "link" => "https://shope.ee/jtvP5dej",
                "img" => "2_BSR_16.jpg",
                "nama" => "2.DRESS CASUAL DUDU (BSR-16)"
            ],[
                "id" => "3",
                "link" => "https://shope.ee/6paE3q8ynO",
                "img" => "3_BSR_23.jpg",
                "nama" => "3.DRESS CASUAL BARBIE (BSR-23)"
            ],[
                "id" => "4",
                "link" => "https://shope.ee/B3K75pLkp",
                "img" => "4_BSR_24.jpg",
                "nama" => "4.DRESS CASUAL SOUL (BSR-24)"
            ],[
                "id" => "5",
                "link" => "https://shope.ee/4pp9fdPnb3",
                "img" => "5_BSR_20.jpg",
                "nama" => "5.DRESS CASUAL ALLMOTIF (BSR-20)"
            ],[
                "id" => "6",
                "link" => "https://shope.ee/4pp9fiAIyb",
                "img" => "6_BSR_21.jpg",
                "nama" => "6.DRESS CASUAL MICKEY (BSR-21)"
            ],[
                "id" => "7",
                "link" => "https://shope.ee/AUTWQVnyUm",
                "img" => "7_BSR_13.jpg",
                "nama" => "7.DRESS CASUAL HAPPY (BSR-13)"
            ],[
                "id" => "8",
                "link" => "https://shope.ee/8A5beVpaQE",
                "img" => "8_BSR_17.jpg",
                "nama" => "8.DRESS CASUAL MINNIE (BSR-17)"
            ],[
                "id" => "9",
                "link" => "https://shope.ee/5V4qf5Om3O",
                "img" => "9_BSR_05.jpg",
                "nama" => "9.DRESS CASUAL BERUANG (BSR-05)"
            ],[
                "id" => "10",
                "link" => "https://shope.ee/3L0Lt63r6K",
                "img" => "10_BSR_KANCING.jpg",
                "nama" => "10.DRESS CASUAL KANCING (BSR-22)"
            ],[
                "id" => "11",
                "link" => "https://shope.ee/1AvrV9nGK2",
                "img" => "11_BSR_4.jpg",
                "nama" => "11.DRESS CASUAL GIRL (BSR-04)"
            ],[
                "id" => "12",
                "link" => "https://shope.ee/AUTWQJWkr3",
                "img" => "12_BSR_25.jpg",
                "nama" => "12.DRESS CASUAL PANDA (BSR-25)"
            ],[
                "id" => "13",
                "link" => "https://shope.ee/LMkVjaPLx",
                "img" => "13_BAJU_ANAK_BARBIE.jfif",
                "nama" => "13.T-SHIRT KIDS BARBIE"
            ],[
                "id" => "14",
                "link" => "https://shope.ee/9UazQc0lvQ",
                "img" => "14_BAJU_ANAK_MICKEY.jpg",
                "nama" => "14.T-SHIRT KIDS MICKEY"
            ],[
                "id" => "15",
                "link" => "https://shope.ee/6UxNeRhJHA ",
                "img" => "15_TSHIRT_SOUTH_SIDE.jpg",
                "nama" => "15.T-SHIRT SOUTH SIDE"
            ],[
                "id" => "16",
                "link" => "https://shope.ee/9KHZEMDbGQ",
                "img" => "16_TSHIRT_ONE_LAST.jpg",
                "nama" => "16.T-SHIRT ONE LAST"
            ],[
                "id" => "17",
                "link" => "https://shope.ee/508a4Q7I3P",
                "img" => "17_CROP_TOP.jpg",
                "nama" => "17.CROP TOP JUST TWO"
            ],[
                "id" => "18",
                "link" => "https://shope.ee/6AKXSafpti",
                "img" => "18_CAPRES_ANIS.jpg",
                "nama" => "18.CAPRES ANIES-MUHAIMIN"
            ],[
                "id" => "19",
                "link" => "https://shope.ee/3pwcgNrASC",
                "img" => "19_CAPRES_PRABOWO.jpg",
                "nama" => "19.CAPRES PRABOWO-GIBRAN"
            ],[
                "id" => "20",
                "link" => "https://shope.ee/5AS0GmVqHB",
                "img" => "20_CAPRES_GANJAR.jpg",
                "nama" => "20.CAPRES GANJAR-MAHFUD"
            ]
        ];
    
        return view("home.home", compact('data'));
    }
    public function getLazada(){
        $dataLazada = [
            [
                "id" => "1",
                "link" => "https://s.lazada.co.id/s.nTJPw",
                "img" => "1_BSR_18.jpg",
                "nama" => "1.DRESS CASUAL BEAR(BSR-18)"
            ],[
                "id" => "2",
                "link" => "https://s.lazada.co.id/s.nTJnS",
                "img" => "2_BSR_16.jpg",
                "nama" => "2.DRESS CASUAL DUDU (BSR-16)"
            ],[
                "id" => "3",
                "link" => "https://s.lazada.co.id/s.nTJEx",
                "img" => "3_BSR_23.jpg",
                "nama" => "3.DRESS CASUAL BARBIE (BSR-23)"
                
            ],[
                "id" => "4",
                "link" => "https://s.lazada.co.id/s.nTJB0",
                "img" => "4_BSR_24.jpg",
                "nama" => "4.DRESS CASUAL SOUL (BSR-24)"
                
            ],[
                "id" => "5",
                "link" => "https://s.lazada.co.id/s.nTrkd",
                "img" => "5_BSR_20.jpg",
                "nama" => "5.DRESS CASUAL ALLMOTIF (BSR-20)"
                
            ],[
                "id" => "6",
                "link" => "https://s.lazada.co.id/s.nTrRO",
                "img" => "6_BSR_21.jpg",
                "nama" => "6.DRESS CASUAL MICKEY (BSR-21)"
            ],[
                "id" => "7",
                "link" => "https://s.lazada.co.id/s.nTr7h",
                "img" => "7_BSR_13.jpg",
                "nama" => "7.DRESS CASUAL HAPPY (BSR-13)"
                
            ],[
                "id" => "8",
                "link" => "https://s.lazada.co.id/s.nTJAB",
                "img" => "8_BSR_17.jpg",
                "nama" => "8.DRESS CASUAL MINNIE (BSR-17)"
                
            ],[
                "id" => "9",
                "link" => "https://s.lazada.co.id/s.nTreZ",
                "img" => "9_BSR_05.jpg",
                "nama" => "9.DRESS CASUAL BERUANG (BSR-05)"
            ],[
                "id" => "10",
                "link" => "https://s.lazada.co.id/s.nTrbC",
                "img" => "10_BSR_KANCING.jpg",
                "nama" => "10.DRESS CASUAL KANCING (BSR-22)"
                
            ],[
                "id" => "11",
                "link" => "https://s.lazada.co.id/s.nTrd2",
                "img" => "11_BSR_4.jpg",
                "nama" => "11.DRESS CASUAL GIRL (BSR-04)"
                
            ],[
                "id" => "12",
                "link" => "https://s.lazada.co.id/s.nTrfk",
                "img" => "12_BSR_25.jpg",
                "nama" => "12.DRESS CASUAL PANDA (BSR-25)"
                
            ],[
                "id" => "13",
                "link" => "https://s.lazada.co.id/s.nTrv3",
                "img" => "13_BAJU_ANAK_BARBIE.jfif",
                "nama" => "13.T-SHIRT KIDS BARBIE"
            ],[
                "id" => "14",
                "link" => "https://s.lazada.co.id/s.nTrxQ",
                "img" => "14_BAJU_ANAK_MICKEY.jpg",
                "nama" => "14.T-SHIRT KIDS BARBIE"
                
            ],[
                "id" => "15",
                "link" => "https://s.lazada.co.id/s.nTI13",
                "img" => "15_TSHIRT_SOUTH_SIDE.jpg",
                "nama" => "15.T-SHIRT SOUTH SIDE"
            ],[
                "id" => "16",
                "link" => "https://s.lazada.co.id/s.nTIXH",
                "img" => "16_TSHIRT_ONE_LAST.jpg",
                "nama" => "16.T-SHIRT ONE LAST"
            ],[
                "id" => "17",
                "link" => "https://s.lazada.co.id/s.nTIUP",
                "img" => "17_CROP_TOP.jpg",
                "nama" => "17.CROP TOP JUST TWO"
            ],[
                "id" => "18",
                "link" => "https://s.lazada.co.id/s.nTIoF",
                "img" => "18_CAPRES_ANIS.jpg",
                "nama" => "18.CAPRES ANIES-MUHAIMIN"
            ],[
                "id" => "19",
                "link" => "https://s.lazada.co.id/s.nTINI",
                "img" => "19_CAPRES_PRABOWO.jpg",
                "nama" => "19.CAPRES PRABOWO-GIBRAN"
            ],[
                "id" => "20",
                "link" => "https://s.lazada.co.id/s.nTIM6",
                "img" => "20_CAPRES_GANJAR.jpg",
                "nama" => "20.CAPRES GANJAR-MAHFUD"
            ]
        ];

        return response()->json($dataLazada, 200);
    }

    public function getShopee(){
        $data = [
            [
                "id" => "1",
                "link" => "https://shope.ee/A9qg1YfzSN",
                "img" => "1_BSR_18.jpg",
                "nama" => "1.DRESS CASUAL BEAR(BSR-18)"
            ],[
                "id" => "2",
                "link" => "https://shope.ee/jtvP5dej",
                "img" => "2_BSR_16.jpg",
                "nama" => "2.DRESS CASUAL DUDU (BSR-16)"
            ],[
                "id" => "3",
                "link" => "https://shope.ee/6paE3q8ynO",
                "img" => "3_BSR_23.jpg",
                "nama" => "3.DRESS CASUAL BARBIE (BSR-23)"
            ],[
                "id" => "4",
                "link" => "https://shope.ee/B3K75pLkp",
                "img" => "4_BSR_24.jpg",
                "nama" => "4.DRESS CASUAL SOUL (BSR-24)"
            ],[
                "id" => "5",
                "link" => "https://shope.ee/4pp9fdPnb3",
                "img" => "5_BSR_20.jpg",
                "nama" => "5.DRESS CASUAL ALLMOTIF (BSR-20)"
            ],[
                "id" => "6",
                "link" => "https://shope.ee/4pp9fiAIyb",
                "img" => "6_BSR_21.jpg",
                "nama" => "6.DRESS CASUAL MICKEY (BSR-21)"
            ],[
                "id" => "7",
                "link" => "https://shope.ee/AUTWQVnyUm",
                "img" => "7_BSR_13.jpg",
                "nama" => "7.DRESS CASUAL HAPPY (BSR-13)"
            ],[
                "id" => "8",
                "link" => "https://shope.ee/8A5beVpaQE",
                "img" => "8_BSR_17.jpg",
                "nama" => "8.DRESS CASUAL MINNIE (BSR-17)"
            ],[
                "id" => "9",
                "link" => "https://shope.ee/5V4qf5Om3O",
                "img" => "9_BSR_05.jpg",
                "nama" => "9.DRESS CASUAL BERUANG (BSR-05)"
            ],[
                "id" => "10",
                "link" => "https://shope.ee/3L0Lt63r6K",
                "img" => "10_BSR_KANCING.jpg",
                "nama" => "10.DRESS CASUAL KANCING (BSR-22)"
            ],[
                "id" => "11",
                "link" => "https://shope.ee/1AvrV9nGK2",
                "img" => "11_BSR_4.jpg",
                "nama" => "11.DRESS CASUAL GIRL (BSR-04)"
            ],[
                "id" => "12",
                "link" => "https://shope.ee/AUTWQJWkr3",
                "img" => "12_BSR_25.jpg",
                "nama" => "12.DRESS CASUAL PANDA (BSR-25)"
            ],[
                "id" => "13",
                "link" => "https://shope.ee/LMkVjaPLx",
                "img" => "13_BAJU_ANAK_BARBIE.jfif",
                "nama" => "13.T-SHIRT KIDS BARBIE"
            ],[
                "id" => "14",
                "link" => "https://shope.ee/9UazQc0lvQ",
                "img" => "14_BAJU_ANAK_MICKEY.jpg",
                "nama" => "14.T-SHIRT KIDS MICKEY"
            ],[
                "id" => "15",
                "link" => "https://shope.ee/6UxNeRhJHA ",
                "img" => "15_TSHIRT_SOUTH_SIDE.jpg",
                "nama" => "15.T-SHIRT SOUTH SIDE"
            ],[
                "id" => "16",
                "link" => "https://shope.ee/9KHZEMDbGQ",
                "img" => "16_TSHIRT_ONE_LAST.jpg",
                "nama" => "16.T-SHIRT ONE LAST"
            ],[
                "id" => "17",
                "link" => "https://shope.ee/508a4Q7I3P",
                "img" => "17_CROP_TOP.jpg",
                "nama" => "17.CROP TOP JUST TWO"
            ],[
                "id" => "18",
                "link" => "https://shope.ee/6AKXSafpti",
                "img" => "18_CAPRES_ANIS.jpg",
                "nama" => "18.CAPRES ANIES-MUHAIMIN"
            ],[
                "id" => "19",
                "link" => "https://shope.ee/3pwcgNrASC",
                "img" => "19_CAPRES_PRABOWO.jpg",
                "nama" => "19.CAPRES PRABOWO-GIBRAN"
            ],[
                "id" => "20",
                "link" => "https://shope.ee/5AS0GmVqHB",
                "img" => "20_CAPRES_GANJAR.jpg",
                "nama" => "20.CAPRES GANJAR-MAHFUD"
            ]
        ];

        return response()->json($data, 200);
    }
}

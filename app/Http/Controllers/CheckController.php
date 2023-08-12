<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function calculate(Request $request)
    {

        $dataMustOne = [
            "ketuaan" => ((int) $request->ketuaan < 60) ? 0 : 1,
            "kekerasan" => (int) $request->kekerasan,
        ];

        $dataMustZero = [
            "kebusukan" => (int) $request->kebusukan,
            "kerusakan" => (int) $request->kerusakan,
        ];

        // kadar air
        if ((float) $request->kadar_air > 80 && (float) $request->kadar_air <= 85) {
            $dataMustOne["kadar_air"] = 1;
        } else {
            $dataMustOne["kadar_air"] = 0;
        }

        // diameter
        if ((float) $request->diameter > 2.5) {
            $dataMustOne["diameter"] = 1;
        } else if ((float) $request->diameter >= 1.5 && (float) $request->diameter <= 2.5) {
            $dataMustOne["diameter"] = 0.5;
        } else {
            $dataMustOne["diameter"] = 0;
        }

        $mutu1 = ((0.9484 - $dataMustOne['ketuaan']) ** 2) + ((0.9992 - $dataMustOne['kekerasan']) ** 2)
            + ((0.0069 - $dataMustZero["kebusukan"]) ** 2) + ((0.5276 - $dataMustZero["kerusakan"]) ** 2)
            + ((0.8617 - $dataMustOne["kadar_air"]) ** 2) + ((0.5300 - $dataMustOne["diameter"]) ** 2);

        $mutu2 = ((0.9688 - $dataMustOne['ketuaan']) ** 2) + ((0.0000 - $dataMustOne['kekerasan']) ** 2)
            + ((0.0000 - $dataMustZero["kebusukan"]) ** 2) + ((0.0000 - $dataMustZero["kerusakan"]) ** 2)
            + ((0.0625  - $dataMustOne["kadar_air"]) ** 2) + ((0.4844 - $dataMustOne["diameter"]) ** 2);

        if ($mutu1 < $mutu2) {
            $res = [
                "message" => "Bawang Merah Bermutu 1"
            ];
        } else {
            $res = [
                "message" => "Bawang Merah Bermutu 2"
            ];
        }
        $res["mutu1"] = $mutu1;
        $res["mutu2"] = $mutu2;


        return response()->json($res, 200);
    }
}

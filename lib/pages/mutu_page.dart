import 'package:bamer_palu/components/subtitle.dart';
import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:hexcolor/hexcolor.dart';

class MutuPage extends StatefulWidget {
  const MutuPage({super.key});

  @override
  State<MutuPage> createState() => _MutuPageState();
}

class _MutuPageState extends State<MutuPage> {
  // @GlobalVariable
  int valueKetuaan = 1;
  double valueKadarAir = 0, valueDiameter = 0;

  void calculate() {
    print(valueKetuaan);
    print(valueKadarAir);
  }

  @override
  Widget build(BuildContext context) {
    return SingleChildScrollView(
      child: Padding(
        padding: EdgeInsets.only(left: 16.0, top: 16.0, right: 16.0),
        child: Column(
          children: [
            Subtitle(label: 'Uji Data'),
            const SizedBox(
              height: 8.0,
            ),
            RichText(
              softWrap: true,
              textAlign: TextAlign.justify,
              text: TextSpan(
                style: DefaultTextStyle.of(context).style,
                children: <TextSpan>[
                  TextSpan(
                      text:
                          'Silakan jawab pertanyaan dibawah ini untuk mengetahui',
                      style: TextStyle(fontSize: 16, height: 1.5)),
                  TextSpan(
                    text: ' Mutu Bawang Merah ',
                    style: TextStyle(
                        fontWeight: FontWeight.bold, fontSize: 16, height: 1.5),
                  ),
                  TextSpan(
                    text: 'Anda. ',
                    style: TextStyle(fontSize: 16, height: 1.5),
                  ),
                ],
              ),
            ),
            const SizedBox(
              height: 25.0,
            ),
            Container(
              width: double.infinity,
              padding: EdgeInsets.all(16.0),
              decoration: BoxDecoration(
                  color: Colors.white,
                  borderRadius: BorderRadius.circular(10.0),
                  boxShadow: [
                    BoxShadow(
                        color: HexColor('#cbd5e1'),
                        offset: Offset(0, 0),
                        blurRadius: 5,
                        spreadRadius: 0.75)
                  ],
                  border: Border.all(color: Colors.grey.shade300)),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Text(
                    'Berapa hari setelah tanam (HST) Bawang Merah Anda?',
                    style: GoogleFonts.poppins(fontSize: 14.0),
                  ),
                  const SizedBox(
                    height: 5.0,
                  ),
                  // @InputKetuaan
                  TextField(
                    keyboardType: TextInputType.number,
                    inputFormatters: [
                      FilteringTextInputFormatter.digitsOnly,
                    ],
                    onChanged: (value) {
                      if (!value.isEmpty) {
                        valueKetuaan = int.parse(value);
                      } else {
                        valueKetuaan = 1;
                      }
                    },
                    style: TextStyle(fontSize: 14.0),
                    decoration: InputDecoration(
                      contentPadding:
                          EdgeInsets.symmetric(vertical: 5.0, horizontal: 10),
                      enabledBorder: OutlineInputBorder(
                        borderSide:
                            BorderSide(width: 2, color: Colors.grey.shade300),
                        borderRadius: BorderRadius.circular(8.0),
                      ),
                      focusedBorder: OutlineInputBorder(
                        borderSide: BorderSide(
                          width: 2,
                          color: HexColor('#f43f5e'),
                        ),
                        borderRadius: BorderRadius.circular(12.0),
                      ),
                      hintText: "1",
                    ),
                  ),

                  const SizedBox(
                    height: 15.0,
                  ),

                  // @KadarAir
                  Text(
                    'Jumlah kadar air pada Bawang Merah?',
                    style: GoogleFonts.poppins(fontSize: 14.0),
                  ),
                  const SizedBox(
                    height: 5.0,
                  ),
                  // @InputKadarAir
                  TextField(
                    keyboardType: TextInputType.number,
                    inputFormatters: [
                      FilteringTextInputFormatter.allow(
                          RegExp(r'(^\d*\.?\d*)')),
                    ],
                    onChanged: (value) {
                      if (!value.isEmpty) {
                        valueKadarAir = double.parse(value);
                      } else {
                        valueKadarAir = 1;
                      }
                    },
                    style: TextStyle(fontSize: 14.0),
                    decoration: InputDecoration(
                      contentPadding:
                          EdgeInsets.symmetric(vertical: 5.0, horizontal: 10),
                      enabledBorder: OutlineInputBorder(
                        borderSide:
                            BorderSide(width: 2, color: Colors.grey.shade300),
                        borderRadius: BorderRadius.circular(8.0),
                      ),
                      focusedBorder: OutlineInputBorder(
                        borderSide: BorderSide(
                          width: 2,
                          color: HexColor('#f43f5e'),
                        ),
                        borderRadius: BorderRadius.circular(12.0),
                      ),
                      hintText: "0",
                    ),
                  ),

                  const SizedBox(
                    height: 15.0,
                  ),

                  // @Diameter
                  Text(
                    'Ukuran diameter Bawang Merah?',
                    style: GoogleFonts.poppins(fontSize: 14.0),
                  ),
                  const SizedBox(
                    height: 5.0,
                  ),
                  // @InputDiameter
                  TextField(
                    keyboardType: TextInputType.number,
                    inputFormatters: [
                      FilteringTextInputFormatter.allow(
                          RegExp(r'(^\d*\.?\d*)')),
                    ],
                    onChanged: (value) {
                      if (!value.isEmpty) {
                        valueDiameter = double.parse(value);
                      } else {
                        valueDiameter = 1;
                      }
                    },
                    style: TextStyle(fontSize: 14.0),
                    decoration: InputDecoration(
                      contentPadding:
                          EdgeInsets.symmetric(vertical: 5.0, horizontal: 10),
                      enabledBorder: OutlineInputBorder(
                        borderSide:
                            BorderSide(width: 2, color: Colors.grey.shade300),
                        borderRadius: BorderRadius.circular(8.0),
                      ),
                      focusedBorder: OutlineInputBorder(
                        borderSide: BorderSide(
                          width: 2,
                          color: HexColor('#f43f5e'),
                        ),
                        borderRadius: BorderRadius.circular(12.0),
                      ),
                      hintText: "1",
                    ),
                  ),

                  const SizedBox(
                    height: 15.0,
                  ),

                  // @ButtonCheck
                  MaterialButton(
                    onPressed: calculate,
                    minWidth: double.infinity,
                    hoverColor: Colors.red[900],
                    padding: EdgeInsets.symmetric(vertical: 12.0),
                    color: Colors.red,
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(8.0),
                    ),
                    textColor: Colors.white,
                    child: Text('Cek Mutu'),
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}

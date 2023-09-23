import 'dart:math';
import 'package:bamer_palu/components/subtitle.dart';
import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:hexcolor/hexcolor.dart';
import 'package:dropdown_textfield/dropdown_textfield.dart';
import 'package:smart_alert_dialog/smart_alert_dialog.dart';
import 'package:smart_alert_dialog/models/alert_dialog_text.dart';

class MutuPage extends StatefulWidget {
  const MutuPage({super.key});

  @override
  State<MutuPage> createState() => _MutuPageState();
}

class _MutuPageState extends State<MutuPage> {
  // @GlobalVariable
  int valueKetuaan = 1,
      valueKekerasan = 0,
      valueKebusukan = 0,
      valueKerusakan = 0,
      powerUp = 2;
  double valueKadarAir = 0, valueDiameter = 0;

  void calculate() {
    valueKetuaan = (valueKetuaan < 60) ? 0 : 1;
    valueKadarAir = (valueKadarAir >= 80 && valueKadarAir <= 85) ? 1 : 0;

    // diameter
    if (valueDiameter > 2.5) {
      valueDiameter = 1;
    } else if (valueDiameter >= 1.5 && valueDiameter <= 2.5) {
      valueDiameter = 0.5;
    } else {
      valueDiameter = 0;
    }

    // proses cek logaritma
    dynamic mutu1 = (pow((0.9484 - valueKetuaan), powerUp)) +
        (pow((0.9992 - valueKekerasan), powerUp)) +
        (pow((0.0069 - valueKebusukan), powerUp)) +
        (pow((0.5276 - valueKerusakan), powerUp)) +
        (pow((0.8617 - valueKadarAir), powerUp)) +
        (pow((0.5300 - valueDiameter), powerUp));

    dynamic mutu2 = (pow((0.9688 - valueKetuaan), powerUp)) +
        (pow((0.0000 - valueKekerasan), powerUp)) +
        (pow((0.0000 - valueKebusukan), powerUp)) +
        (pow((0.0000 - valueKerusakan), powerUp)) +
        (pow((0.0625 - valueKadarAir), powerUp)) +
        (pow((0.4844 - valueDiameter), powerUp));

    //  1 0 0 0 1 0.5 || 1.33 || 0.88 || C2
    print(mutu1);
    print(mutu2);
    if (mutu1 < mutu2) {
      _okSmartAlert(context, "Bawang Merah Mutu I");
    } else {
      _okSmartAlert(context, "Bawang Merah Mutu II");
    }
  }

  void _okSmartAlert(BuildContext context, String text) {
    showDialog(
      context: context,
      builder: (_) => SmartAlertDialog(
        title: "Hasil Pengecekan",
        text: AlertDialogText(
          confirm: '',
          cancel: '',
          dismiss: 'OK',
        ),
        message: text,
        isDismissible: true,
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return SingleChildScrollView(
      child: Padding(
        padding: EdgeInsets.all(16.0),
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

                  // @Kekerasan
                  Text(
                    'Bagaimana tekstur kekerasan Bawang Merah?',
                    style: GoogleFonts.poppins(fontSize: 14.0),
                  ),
                  const SizedBox(
                    height: 5.0,
                  ),

                  //@InputKekerasan
                  DropDownTextField(
                    initialValue: "Keras",
                    onChanged: (val) {
                      valueKekerasan = val.value;
                    },
                    textFieldDecoration: InputDecoration(
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
                      hintText: "--Pilih Kekerasan--",
                    ),
                    dropdownRadius: 4.0,
                    enableSearch: false,
                    clearOption: false,
                    dropDownIconProperty: IconProperty(
                      color: HexColor('#f43f5e'),
                    ),
                    dropDownList: const [
                      DropDownValueModel(name: 'Keras', value: 0),
                      DropDownValueModel(name: 'Cukup Keras', value: 1),
                    ],
                  ),

                  const SizedBox(
                    height: 15.0,
                  ),

                  // @Kebusukan
                  Text(
                    'Kondisi Bawang Merah busuk?',
                    style: GoogleFonts.poppins(fontSize: 14.0),
                  ),
                  const SizedBox(
                    height: 5.0,
                  ),

                  //@InputKekerasan
                  DropDownTextField(
                    initialValue: "Tidak",
                    onChanged: (val) {
                      valueKebusukan = val.value;
                    },
                    textFieldDecoration: InputDecoration(
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
                      hintText: "--Pilih Kebusukan--",
                    ),
                    dropdownRadius: 4.0,
                    enableSearch: false,
                    clearOption: false,
                    dropDownIconProperty: IconProperty(
                      color: HexColor('#f43f5e'),
                    ),
                    dropDownList: const [
                      DropDownValueModel(name: 'Ya', value: 1),
                      DropDownValueModel(name: 'Tidak', value: 0),
                    ],
                  ),

                  const SizedBox(
                    height: 15.0,
                  ),

                  // @Kerusakan
                  Text(
                    'Kondisi Bawang Merah rusak?',
                    style: GoogleFonts.poppins(fontSize: 14.0),
                  ),
                  const SizedBox(
                    height: 5.0,
                  ),

                  //@InputKekerasan
                  DropDownTextField(
                    initialValue: "Tidak",
                    onChanged: (val) {
                      valueKerusakan = val.value;
                    },
                    textFieldDecoration: InputDecoration(
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
                      hintText: "--Pilih Kebusukan--",
                    ),
                    dropdownRadius: 4.0,
                    enableSearch: false,
                    clearOption: false,
                    dropDownIconProperty: IconProperty(
                      color: HexColor('#f43f5e'),
                    ),
                    dropDownList: const [
                      DropDownValueModel(name: 'Ya', value: 1),
                      DropDownValueModel(name: 'Tidak', value: 0),
                    ],
                  ),

                  const SizedBox(
                    height: 15.0,
                  ),
                  // @EndKerusakan

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

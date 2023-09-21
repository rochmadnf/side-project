import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:hexcolor/hexcolor.dart';

class Subtitle extends StatelessWidget {
  final String label;
  const Subtitle({Key? key, required this.label}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Container(
      width: double.infinity,
      decoration: BoxDecoration(
        border:
            Border(bottom: BorderSide(width: 2.0, color: HexColor('#334155'))),
      ),
      child: Text(
        label.toUpperCase(),
        textAlign: TextAlign.center,
        style: GoogleFonts.poppins(
            letterSpacing: 0.5,
            color: Colors.black,
            fontWeight: FontWeight.bold,
            fontSize: 22),
      ),
    );
  }
}

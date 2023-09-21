import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';

class Brand extends StatelessWidget {
  const Brand({super.key});

  @override
  Widget build(BuildContext context) {
    return Row(children: [
      Image.asset(
        'lib/images/logo-untad.png',
        width: 32,
        height: 32,
      ),
      const SizedBox(width: 12),
      Text(
        "Bamer Palu",
        style: GoogleFonts.alatsi(
            fontSize: 28, color: Colors.black, fontWeight: FontWeight.w600),
      ),
    ]);
  }
}

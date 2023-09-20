import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:phosphor_flutter/phosphor_flutter.dart';

class Button extends StatelessWidget {
  final String text;
  final void Function()? onTap;
  final Color buttonColor;
  final PhosphorIcon buttonIcon;

  const Button(
      {super.key,
      required this.text,
      required this.onTap,
      required this.buttonColor,
      required this.buttonIcon});

  @override
  Widget build(BuildContext context) {
    return GestureDetector(
      onTap: onTap,
      child: Container(
        width: 160,
        height: 50,
        decoration: BoxDecoration(
            color: buttonColor, borderRadius: BorderRadius.circular(12)),
        child: Row(
          mainAxisAlignment: MainAxisAlignment.start,
          children: [
            // icon
            buttonIcon,

            //
            const SizedBox(
              width: 10,
            ),

            // text
            Text(
              text,
              style: GoogleFonts.poppins(
                  fontSize: 14,
                  fontWeight: FontWeight.w500,
                  color: Colors.white),
            ),
          ],
        ),
        padding: EdgeInsets.only(left: 15.0, right: 15.0),
      ),
    );
  }
}

import 'package:bamer_palu/components/anchor_wo.dart';
import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:hexcolor/hexcolor.dart';
import 'package:url_launcher/url_launcher.dart';

class Researcher extends StatelessWidget {
  final String imageName, name, scholarURL, expertise;

  const Researcher(
      {Key? key,
      required this.imageName,
      required this.name,
      required this.expertise,
      required this.scholarURL})
      : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Container(
      width: double.infinity,
      height: 250.0,
      decoration: BoxDecoration(
        color: Color.fromARGB(182, 255, 255, 255),
        borderRadius: BorderRadius.circular(10),
        boxShadow: [
          BoxShadow(
              color: HexColor('#cbd5e1'),
              offset: Offset(0, 0),
              blurRadius: 5,
              spreadRadius: 2.5)
        ],
      ),
      child: Column(
        children: [
          const SizedBox(
            height: 15.0,
          ),
          CircleAvatar(
            radius: 48,
            backgroundColor: Colors.red[400],
            child: Padding(
              padding: EdgeInsets.all(4.0),
              child: ClipOval(
                child: Image.asset('lib/images/researcher/${imageName}'),
              ),
            ),
          ),
          const SizedBox(
            height: 15.0,
          ),
          Text(
            name,
            style:
                GoogleFonts.poppins(fontWeight: FontWeight.w700, fontSize: 20),
          ),
          Text(
            expertise,
            style:
                GoogleFonts.poppins(fontWeight: FontWeight.w300, fontSize: 14),
          ),
          const SizedBox(
            height: 25.0,
          ),
          AnchorWo(
            label: 'Google Scholar',
            url: scholarURL,
          ),
        ],
      ),
    );
  }
}

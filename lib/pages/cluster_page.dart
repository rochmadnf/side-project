import 'package:bamer_palu/components/subtitle.dart';
import 'package:flutter/material.dart';
import 'package:flutter/rendering.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:hexcolor/hexcolor.dart';

class ClusterPage extends StatelessWidget {
  const ClusterPage({super.key});

  @override
  Widget build(BuildContext context) {
    return SingleChildScrollView(
      child: Padding(
        padding: EdgeInsets.only(left: 16.0, right: 16.0, top: 16.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.center,
          children: [
            Subtitle(label: 'Peta Kluster'),
            const SizedBox(
              height: 15.0,
            ),
            ClipRRect(
              borderRadius: BorderRadius.circular(8.0),
              child: Image.asset('lib/images/cluster-map.jpg'),
            ),
            const SizedBox(
              height: 20.0,
            ),
            Row(
              children: [
                Container(
                  height: 8,
                  width: 40,
                  decoration: BoxDecoration(color: HexColor('#EA1522')),
                ),
                const SizedBox(
                  width: 15.0,
                ),
                Text(
                  'Kelompok Daerah Bermutu I',
                  style: GoogleFonts.poppins(),
                ),
              ],
            ),
            const SizedBox(
              height: 5.0,
            ),
            Row(
              children: [
                Container(
                  height: 8,
                  width: 40,
                  decoration: BoxDecoration(color: HexColor('#B7E523')),
                ),
                const SizedBox(
                  width: 15.0,
                ),
                Text(
                  'Kelompok Daerah Bermutu II',
                  style: GoogleFonts.poppins(),
                ),
              ],
            )
          ],
        ),
      ),
    );
  }
}

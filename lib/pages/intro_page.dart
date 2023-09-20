import 'package:bamer_palu/components/button.dart';
import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:phosphor_flutter/phosphor_flutter.dart';

class IntroPage extends StatelessWidget {
  const IntroPage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.grey[50],
      body: Padding(
        padding: const EdgeInsets.all(25.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.center,
          mainAxisAlignment: MainAxisAlignment.spaceEvenly,
          children: [
            const SizedBox(height: 15),
            Align(
              alignment: Alignment.center,
              child: Container(
                child: Row(children: [
                  Image.asset(
                    'lib/images/logo-untad.png',
                    width: 32,
                    height: 32,
                  ),
                  const SizedBox(width: 12),
                  Text(
                    "Bamer Palu",
                    style: GoogleFonts.alatsi(
                        fontSize: 28,
                        color: Colors.black,
                        fontWeight: FontWeight.w600),
                  ),
                ]),
              ),
            ),

            const SizedBox(height: 30),

            Image.asset(
              'lib/images/hello_farmer.png',
              width: 192,
              height: 192,
            ),

            Text(
              'Halo, Farmer',
              style: GoogleFonts.poppins(
                  fontSize: 24,
                  height: 2,
                  color: Colors.black,
                  fontWeight: FontWeight.bold),
            ),
            Text(
              'Selamat Datang di Aplikasi Bamer Palu',
              style: GoogleFonts.poppins(
                  color: Colors.black,
                  fontWeight: FontWeight.w300,
                  fontSize: 16),
            ),
            const SizedBox(height: 25.0),

            // buttons
            Container(
              child: Column(
                children: [
                  Button(
                    text: 'Info Aplikasi',
                    onTap: () {},
                    buttonColor: Color.fromARGB(255, 90, 163, 245),
                    buttonIcon: PhosphorIcon(
                      PhosphorIcons.fill.info,
                      color: Colors.white,
                    ),
                  ),
                  const SizedBox(
                    height: 10,
                  ),
                  Button(
                    text: 'Standar Mutu',
                    onTap: () {},
                    buttonColor: Color.fromARGB(255, 88, 177, 91),
                    buttonIcon: PhosphorIcon(
                      PhosphorIcons.fill.flask,
                      color: Colors.white,
                    ),
                  ),
                  const SizedBox(
                    height: 10,
                  ),
                  Button(
                    text: 'Cek Mutu',
                    onTap: () {},
                    buttonColor: Color.fromARGB(255, 211, 49, 49),
                    buttonIcon: PhosphorIcon(
                      PhosphorIcons.fill.sparkle,
                      color: Colors.white,
                    ),
                  ),
                  const SizedBox(
                    height: 10,
                  ),
                  Button(
                    text: 'Peta Kluster',
                    onTap: () {},
                    buttonColor: Color.fromARGB(255, 234, 106, 37),
                    buttonIcon: PhosphorIcon(
                      PhosphorIcons.fill.mapTrifold,
                      color: Colors.white,
                    ),
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
      bottomNavigationBar: Container(
        decoration: BoxDecoration(color: Colors.red[100]),
        child: Padding(
          padding: EdgeInsets.all(15.0),
          child: Text(
            '© 2023 Prodi Matematika Jurusan Matematika Fakultas MIPA Universitas Tadulako',
            textAlign: TextAlign.center,
            style: GoogleFonts.poppins(
                color: Colors.grey[700],
                fontSize: 12,
                fontWeight: FontWeight.w500),
          ),
        ),
      ),
    );
  }
}

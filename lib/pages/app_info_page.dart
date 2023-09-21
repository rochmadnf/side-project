import 'package:bamer_palu/components/anchor.dart';
import 'package:bamer_palu/pages/main_page.dart';
import 'package:flutter/material.dart';
import 'package:flutter/gestures.dart';
import 'package:bamer_palu/components/subtitle.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:url_launcher/url_launcher.dart';
import 'package:url_launcher/url_launcher_string.dart';

class AppInfoPage extends StatelessWidget {
  const AppInfoPage({Key? key}) : super(key: key);

  Future<void> _launchUrl(String _url) async {
    if (!await launchUrlString(_url, mode: LaunchMode.externalApplication)) {
      throw Exception('Could not launch $_url');
    }
  }

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding:
          EdgeInsets.only(top: 24.0, left: 16.0, right: 16.0, bottom: 24.0),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Subtitle(
            label: 'Info Aplikasi',
          ),
          const SizedBox(
            height: 15.0,
          ),
          RichText(
            softWrap: true,
            textAlign: TextAlign.justify,
            text: TextSpan(
              style: DefaultTextStyle.of(context).style,
              children: <TextSpan>[
                TextSpan(
                    text: 'Bamer Palu',
                    style: TextStyle(
                        fontWeight: FontWeight.bold,
                        fontSize: 15,
                        height: 1.5)),
                TextSpan(
                  text:
                      ' merupakan aplikasi yang dibuat dengan tujuan mempermudah petani atau masyarakat umum untuk mengecek ',
                  style: TextStyle(fontSize: 15, height: 1.5),
                ),
                TextSpan(
                  text: 'Standar Mutu',
                  style: TextStyle(
                      color: Colors.blue,
                      decoration: TextDecoration.underline,
                      fontSize: 15),
                  recognizer: TapGestureRecognizer()
                    ..onTap = () {
                      Navigator.of(context).push(MaterialPageRoute(
                        builder: (context) => MainPage(
                          selectedIdTab: 0,
                          selectedIdPage: 5,
                        ),
                      ));
                    },
                ),
                TextSpan(
                  text: ' dari ',
                  style: TextStyle(fontSize: 15, height: 1.5),
                ),
                TextSpan(
                  text: ' Bawang Merah ',
                  style: TextStyle(
                    fontWeight: FontWeight.bold,
                    fontSize: 15,
                    height: 1.5,
                  ),
                ),
                TextSpan(
                  text: ' yang dihasilkan saat panen. ',
                  style: TextStyle(fontSize: 16, height: 1.5),
                ),
              ],
            ),
          ),
          const SizedBox(
            height: 25.0,
          ),
          RichText(
            softWrap: true,
            textAlign: TextAlign.justify,
            text: TextSpan(
              style: DefaultTextStyle.of(context).style,
              children: <TextSpan>[
                TextSpan(
                    text: 'Aplikasi ini dipelopori oleh ',
                    style: TextStyle(fontSize: 15, height: 1.5)),
                TextSpan(
                  text: 'Tim Peneliti',
                  style: TextStyle(
                      color: Colors.blue,
                      decoration: TextDecoration.underline,
                      fontSize: 15),
                  recognizer: TapGestureRecognizer()
                    ..onTap = () {
                      Navigator.of(context).push(MaterialPageRoute(
                        builder: (context) => MainPage(
                          selectedIdTab: 3,
                          selectedIdPage: 3,
                        ),
                      ));
                    },
                ),
                TextSpan(
                  text:
                      ' dari Program Studi Matematika Jurusan Matematika Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Tadulako. ',
                  style: TextStyle(fontSize: 15, height: 1.5),
                ),
              ],
            ),
          ),
          const SizedBox(
            height: 25.0,
          ),
          // credit
          Text('Credit',
              style: GoogleFonts.poppins(
                  fontWeight: FontWeight.bold, fontSize: 24)),
          Anchor(
            label: 'Universitas Tadulako',
            onTap: () async {
              await _launchUrl('https://untad.ac.id/');
            },
          ),
          const SizedBox(height: 10.0),
          Anchor(
            label: 'Rochmad Nurul Fahmi',
            onTap: () async {
              await _launchUrl('https://instagram.com/rochmadnf');
            },
          ),
          const SizedBox(height: 10.0),
          Anchor(
            label: 'Image by rawpixel.com on Freepik',
            onTap: () async {
              await _launchUrl(
                  'https://www.freepik.com/free-vector/farmers-using-agricultural-technology-vector_16340308.htm#query=farmer&position=8&from_view=search&track=sph');
            },
          ),
        ],
      ),
    );
  }
}

import 'package:bamer_palu/components/researcher.dart';
import 'package:bamer_palu/components/subtitle.dart';
import 'package:flutter/material.dart';

class ResearcherPage extends StatelessWidget {
  const ResearcherPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return SingleChildScrollView(
      child: Padding(
        padding: EdgeInsets.only(left: 16.0, right: 16.0, top: 16.0),
        child: Column(
          children: [
            Subtitle(label: 'Tim Peneliti'),
            const SizedBox(
              height: 25.0,
            ),
            Researcher(
              imageName: 'selvy-musdalifah.jpg',
              name: 'Selvy Musdalifah, S.Si., M.Si',
              expertise: 'Matematika Analisis',
              scholarURL:
                  'https://scholar.google.com/citations?hl=en&user=S88DTYYAAAAJ',
            ),
            const SizedBox(
              height: 25.0,
            ),
            Researcher(
              imageName: 'desy-lusiyanti.jpg',
              name: 'Desy Lusiyanti, S.Si., M.Si',
              expertise: 'Matematika Komputasi',
              scholarURL:
                  'https://scholar.google.com/citations?hl=en&user=7QKsz7AAAAAJ',
            ),
            const SizedBox(
              height: 25.0,
            ),
            Researcher(
              imageName: 'agusman-sahari.jpg',
              name: 'Agusman Sahari, S.Si., M.Si',
              expertise: 'Matematika Terapan',
              scholarURL:
                  'https://scholar.google.com/citations?hl=en&user=WDQfWIwAAAAJ',
            ),
            const SizedBox(
              height: 25.0,
            )
          ],
        ),
      ),
    );
  }
}

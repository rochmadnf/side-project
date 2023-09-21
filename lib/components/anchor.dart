import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:phosphor_flutter/phosphor_flutter.dart';

class Anchor extends StatelessWidget {
  final String label;
  final void Function()? onTap;

  const Anchor({Key? key, required this.label, required this.onTap})
      : super(key: key);

  @override
  Widget build(BuildContext context) {
    return GestureDetector(
      onTap: onTap,
      child: Container(
        child: Row(
          children: [
            PhosphorIcon(
              PhosphorIcons.fill.arrowFatLinesRight,
              size: 16,
              color: Colors.blue[400],
            ),
            const SizedBox(
              width: 5.0,
            ),
            Text(
              label,
              style: GoogleFonts.poppins(
                color: Colors.blue[400],
                fontSize: 16,
              ),
            )
          ],
        ),
      ),
    );
  }
}

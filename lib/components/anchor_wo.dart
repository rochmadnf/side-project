import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:url_launcher/url_launcher.dart';

class AnchorWo extends StatelessWidget {
  final String label;
  final String url;
  // final void Function()? onTap;

  const AnchorWo({Key? key, required this.label, required this.url})
      : super(key: key);

  Future<void> _launchUrl(String _url,
      {bool forceWebView = false, bool enableJavascript = false}) async {
    if (!await launch(_url,
        forceWebView: forceWebView, enableJavaScript: enableJavascript)) {
      throw Exception('Could not launch $_url');
    }
  }

  @override
  Widget build(BuildContext context) {
    return GestureDetector(
      onTap: () async {
        await _launchUrl(
          url,
          forceWebView: true,
          enableJavascript: true,
        );
      },
      child: Container(
        child: Row(
          crossAxisAlignment: CrossAxisAlignment.center,
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Text(
              label,
              textAlign: TextAlign.center,
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

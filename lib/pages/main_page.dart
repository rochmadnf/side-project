import 'package:bamer_palu/components/brand.dart';
import 'package:bamer_palu/pages/app_info_page.dart';
import 'package:bamer_palu/pages/cluster_page.dart';
import 'package:bamer_palu/pages/intro_page.dart';
import 'package:bamer_palu/pages/mutu_page.dart';
import 'package:bamer_palu/pages/researcher_page.dart';
import 'package:bamer_palu/pages/standard_mutu_page.dart';
import 'package:flutter/material.dart';
import 'package:google_nav_bar/google_nav_bar.dart';
import 'package:phosphor_flutter/phosphor_flutter.dart';
import 'package:hexcolor/hexcolor.dart';

class MainPage extends StatefulWidget {
  final int selectedIdTab;
  final int selectedIdPage;
  const MainPage(
      {Key? key, required this.selectedIdTab, required this.selectedIdPage})
      : super(key: key);

  @override
  State<MainPage> createState() => _MainPageState();
}

class _MainPageState extends State<MainPage> {
  int _selectedIndex = 0;
  int _selectedPage = 0;

  void _navigatedBottomBar(int index) {
    if (index == 0) {
      Navigator.of(context)
          .push(MaterialPageRoute(builder: (context) => IntroPage()));
    } else {
      setState(() {
        _selectedIndex = index;
        _selectedPage = index;
      });
    }
  }

  final List<Widget> _pages = [
    IntroPage(),
    ClusterPage(),
    MutuPage(),
    ResearcherPage(),
    AppInfoPage(),
    StandardMutuPage(),
  ];

  @override
  void initState() {
    _selectedIndex = widget.selectedIdTab;
    _selectedPage = widget.selectedIdPage;
  }

  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        automaticallyImplyLeading: false,
        backgroundColor: Colors.red[200],
        title: Brand(),
      ),
      body: _pages[_selectedPage],
      bottomNavigationBar: Container(
        color: HexColor("#fda4af"),
        child: Padding(
          padding: const EdgeInsets.symmetric(horizontal: 15.0, vertical: 15.0),
          child: GNav(
              selectedIndex: _selectedIndex,
              backgroundColor: HexColor("#fda4af"),
              activeColor: Colors.white,
              color: HexColor('#0f172a'),
              tabBackgroundColor: HexColor("#f43f5e"),
              onTabChange: _navigatedBottomBar,
              padding: EdgeInsets.all(16),
              gap: 8,
              tabs: [
                GButton(
                  icon: PhosphorIcons.fill.house,
                  text: 'Home',
                ),
                GButton(
                    icon: PhosphorIcons.fill.mapTrifold, text: 'Peta Kluster'),
                GButton(icon: PhosphorIcons.fill.testTube, text: 'Uji Data'),
                GButton(icon: PhosphorIcons.fill.usersThree, text: 'Peneliti'),
              ]),
        ),
      ),
    );
  }
}

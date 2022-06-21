/*Database for ISMP 2020*/

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*Drop Statements*/

DROP TABLE IF EXISTS `carousel`;
DROP TABLE IF EXISTS `team`;
DROP TABLE IF EXISTS `faqs`;
DROP TABLE IF EXISTS `blog_view`;
DROP TABLE IF EXISTS `website_view`;

/*Website View Table*/

CREATE TABLE IF NOT EXISTS `website_view` (
  `id` varchar(70) NOT NULL,
  `views` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `website_view` (`id`,`views`) VALUES
("website","19569");

/*Blogs View Table*/

CREATE TABLE IF NOT EXISTS `blog_view` (
  `id` varchar(70) NOT NULL,
  `views` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `blog_view` (`id`,`views`) VALUES
("places_to_visit_near_ropar","361"),
("advice_to_juniors","101"),
("first_year_at_iit_ropar","106"),
("how_to_make_decisions","84"),
("freshers_guide","113"),
("facilities","339"),
("life_at_iit_ropar","96"),
("the_home_away_from_your_home","30"),
("ismp","145"),
("programme_change","273"),
("advitiya","118"),
("zeitgeist","110"),
("aarohan","84"),
("baja","124"),
("new_1","370"),
("new_2","0"),
("new_3","0"),
("new_4","0"),
("new_5","0");


/*Team Table*/

CREATE TABLE IF NOT EXISTS `team` (
  `serial` int(200) NOT NULL,
  `name` varchar(70) NOT NULL,
  `post` varchar(70) NOT NULL,
  `wapp` varchar(70) NOT NULL,
  `fb` varchar(70) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `phone` varchar(70) NOT NULL,
  `img` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `team` (`serial`,`name`,`post`,`wapp`,`fb`,`mail`,`phone`,`img`) VALUES
("1","Dr. Mukesh Saini","FACULTY IN-CHARGE","","","mukesh@iitrpr.ac.in","","images/team/faculty/mukesh.jpg"),
("2","Riya Gupta","SECRETARY","8543827593","https://www.facebook.com/profile.php?id=100038657764102","2019meb1288@iitrpr.ac.in","8543827593","images/team/core/Riya_Gupta.jpg"),
("3","Manik Thappa","CO-SECRETARY","9622040651","https://instagram.com/manik_505?utm_medium=copy_link","2019meb1275@iitrpr.ac.in","9622040651","images/team/core/Manik_Thappa.jpg"),
("4","Khushi Malviya","CO-SECRETARY","7770900316","https://www.facebook.com/profile.php?id=100009954184617","2019meb1270@iitrpr.ac.in","7770900316","images/team/core/Khushi_Malviya.png"),
("5","Ritesh Kumar Gupta","WEB DESIGNING HEAD","6265140381","https://www.facebook.com/profile.php?id=100021877061372","2020eeb1199@iitrpr.ac.in","6265140381","images/team/core/riteshgupta_2020eeb1199.jpg"),
("6","Vedant Sati","WEB DESIGNING HEAD","9205209274","https://www.facebook.com/vedant.sati.5","2020eeb1219@iitrpr.ac.in","9205209274","images/team/core/vedantsati_2020eeb1219.jpeg"),
("7","Akshat Pandey","FOUNDING MEMBER","","","","","images/team/founder/akshat_pandey.jpg"),
("8","Ashish Garg","FOUNDING MEMBER","","","","","images/team/founder/ashish_garg.jpg"),
("9","Naresh Kumar","FOUNDING MEMBER","","","","","images/team/founder/naresh_kumar.jpg"),
("10","Naina Bansal","FOUNDING MEMBER","","","","","images/team/founder/naina_bansal.jpg"),
("11","Naman Chhabra","FOUNDING MEMBER","","","","","images/team/founder/naman_chhabra.jpg"),
("12","Aayush Chourasiya","FOUNDING MEMBER","","","","","images/team/founder/aayush_chourasiya.jpg"),
("13","Nitin Jain","FOUNDING MEMBER","","","","","images/team/founder/nitin_jain.jpg"),
("14","Satya Prakash Mishra","FOUNDING MEMBER","","","","","images/team/founder/satya_prakash_mishra.jpg"),
("15","Vaibhav Agarwal","VIDEO EDITOR & MENTOR","8447807292","https://www.facebook.com/profile.php?id=100072721412387","2020meb1326@iitrpr.ac.in","8447807292","images/team/mentor/VAIBHAV AGGARWAL_2020MEB1326.jpg"),
("16","Ayushi Patel","CONTENT WRITER & MENTOR","7409776341","https://www.facebook.com/ayushi.patel.750331","2020csb1080@iitrpr.ac.in","7409776341","images/team/mentor/Ayushi_Patel_2020csb1080.jpeg"),
("17","Lakshya Sharma","CONTENT WRITER & MENTOR","9357749831","","2020meb1292@iitrpr.ac.in","9357749831","images/team/mentor/LakshyaSharma_2020meb1292.jpeg"),
("18","Aryan Agarwal","CONTENT WRITER & MENTOR","9887321353","https://www.facebook.com/profile.php?id=100007577014208","2020ceb1006@iitrpr.ac.in","9887321353","images/team/mentor/ARYAN AGARWAL_2020CEB1006.jpg"),
("19","Sarthak Vats","CONTENT WRITER & MENTOR","9045293781","https://www.facebook.com/profile.php?id=100056158655711","2020ceb1027@iitrpr.ac.in","9045293781","images/team/mentor/Sarthak Vats_2020CEB1027.jpg"),
("20","Aayush Singh","MENTOR","9161964010","https://www.facebook.com/aayush99singh","2020chb1036@iitrpr.ac.in","9161964010","images/team/mentor/Aayush_Singh_2020CHB1036.jpeg"),
("21","Abhishek Samyal","MENTOR","9729749225","","2020eeb1257@iitrpr.ac.in","9729749225","images/team/mentor/Abhishek_Samyal_2020EEB1257.jpg"),
("22","Aditi Das","MENTOR","9123726566","","2020csb1064@iitrpr.ac.in","9123726566","images/team/mentor/AditiDas_2020csb1064.jpg"),
("23","Aena Ghai","MENTOR","9915303189","","2020eeb1148@iitrpr.ac.in","9915303189","images/team/mentor/AenaGhai_2020EEB1148.jpg"),
("24","Akash","MENTOR","9996941319","","2020ceb1003@iitrpr.ac.in","9996941319","images/team/mentor/AKASH_2020CEB1003.jpg"),
("25","Akash Garg","MENTOR","7742789007","","2020meb1262@iitrpr.ac.in","7742789007","images/team/mentor/AKASH GARG_2020MEB1262.png"),
("26","Akshat Toolaj Sinha","MENTOR","8279833510","","2020csb1068@iitrpr.ac.in","8279833510","images/team/mentor/Akshat Toolaj Sinha_2020CSB1068.jpeg"),
("27","Akshit Barnwal","MENTOR","8766406930","","2020eeb1150@iitrpr.ac.in","8766406930","images/team/mentor/akshit_2020.jpeg"),
("28","Akshit Kumar","MENTOR","9671313338","","2020meb1263@iitrpr.ac.in","9671313338","images/team/mentor/AKSHIT_KUMAR_2020MEB1263.JPG"),
("29","Aman Kumar","MENTOR","9546003567","https://www.facebook.com/Aman.K.2854","2020csb1153@iitrpr.ac.in","9546003567","images/team/mentor/Aman_Kumar_2020CSB1153.jpg"),
("30","Aman Pankaj Adatia","MENTOR","8879922197","https://www.facebook.com/profile.php?id=100007729244995","2020csb1154@iitrpr.ac.in","8879922197","images/team/mentor/Aman_Pankaj_Adatia_2020CSB1154.jpg"),
("31","Aniket Rakesh Arya","MENTOR","9879567973","https://www.facebook.com/profile.php?id=100057741003435","2020eeb1157@iitrpr.ac.in","9879567973","images/team/mentor/Aniket Rakesh Arya_2020eeb1157.jpg"),
("32","Anish Barna","MENTOR","9354576962","https://www.facebook.com/anish.barna","2020meb1264@iitrpr.ac.in","9354576962","images/team/mentor/Anish_Barna_2020MEB1264.jpg"),
("33","Ankit Sharma","MENTOR","7014373887","https://www.facebook.com/profile.php?id=100057043986329","2020csb1072@iitrpr.ac.in","7014373887","images/team/mentor/Ankit_Sharma_2020CSB1072.jpg"),
("34","Ankita Sharma","MENTOR","8104425241","https://www.facebook.com/profile.php?id=100057147676690","2020meb1266@iitrpr.ac.in","8104425241","images/team/mentor/ankita_2020.jpeg"),
("35","Anubothula Hema Priya","MENTOR","7661075164","https://www.facebook.com/hemapriya.anubothula.5","2020mcb1228@iitrpr.ac.in","7661075164","images/team/mentor/Anubothula Hema Priya_2020mcb1228.jpeg"),
("36","Apeksha","MENTOR","9588335674","https://www.facebook.com/apeksha.parashar.16","2020meb1268@iitrpr.ac.in","9588335674","images/team/mentor/Apeksha_2020MEB1268.jpg"),
("37","Aryan Prajapati","MENTOR","9650101630","facebook.com/profile.php?id=100057374826778","2020meb1270@iitrpr.ac.in","9650101630","images/team/mentor/ARYAN PRAJAPATI_2020MEB1270.jpeg"),
("38","Ashiya Kandhway","MENTOR","7004731702","https://www.facebook.com/ashiya.kandhway.3/","2020mcb1231@iitrpr.ac.in","7004731702","images/team/mentor/ashiya_2020.jpeg"),
("39","Aviral Gupta","MENTOR","9306042208","https://m.facebook.com/aviral.gupta.7545","2020mmb1338@iitrpr.ac.in","9306042208","images/team/mentor/Aviral_2020MMB1338.jpg"),
("40","Ayushi Jain","MENTOR","7982865945","","2020mcb1233@iitrpr.ac.in","7982865945","images/team/mentor/Ayushi_jain_2020mcb1233.jpg"),
("41","Chena Ram Kumawat","MENTOR","9649766876","https://www.facebook.com/chenaram11kumawat","2020chb1040@iitrpr.ac.in","9649766876","images/team/mentor/CHENA_RAM_KUMAWAT_2020CHB1040.jpg"),
("42","Chinmay Agrawal","MENTOR","9584284264","https://www.facebook.com/chinmay.agrawal.92/","2020ceb1008@iitrpr.ac.in","9584284264","images/team/mentor/chinmay_ag_2020.jpeg"),
("43","Divya Samadhiya","MENTOR","8827271915","","2020ceb1009@iitrpr.ac.in","8827271915","images/team/mentor/Divya Samadhiya_2020CEB1009.jpeg"),
("44","Drishti Jain","MENTOR","8437425181","","2020eeb1168@iitrpr.ac.in","8437425181","images/team/mentor/Drishti_Jain_2020EEB1168.jpg"),
("45","Gagandeep Singh","MENTOR","9478875456","","2020chb1041@iitrpr.ac.in","9478875456","images/team/mentor/GAGANDEEP SINGH_2020CHB1041.jpg"),
("46","Himanshu Parganiha","MENTOR","8109669687","https://m.facebook.com/100056734766728/","2020mmb1346@iitrpr.ac.in","8109669687","images/team/mentor/Himanshu Parganiha_2020MMB1346.jpeg"),
("47","Inayat Kaur","MENTOR","6283611526","","2020csb1088@iitrpr.ac.in","6283611526","images/team/mentor/Inayat_Kaur_2020csb1088.jpg"),
("48","Janmeet Singh Makkar","MENTOR","7307710111","https://www.facebook.com/janmeet.makkar","2020csb1175@iitrpr.ac.in","7307710111","images/team/mentor/Janmeet_Singh_Makkar_2020csb1175.jpg"),
("49","Jashandeep Singh","MENTOR","9991338860","","2020eeb1286@iitrpr.ac.in","9991338860	9991338860","images/team/mentor/Jashandeep_Singh_2020EEB1286.jpg"),
("50","Jayesh Bhojawat","MENTOR","9171450317","","2020mcb1239@iitrpr.ac.in","9171450317","images/team/mentor/Jayesh_Bhojawat_2020mcb1239.jpg"),
("51","Kirti","MENTOR","8930525880","","2020ceb1015@iitrpr.ac.in","8930525880","images/team/mentor/Kirti_2020CEB1015.jpg"),
("52","Komal Meena","MENTOR","7668839299","","2020meb1364@iitrpr.ac.in","7668839299","images/team/mentor/Komal_Meena_2020meb1364.jpg"),
("53","Mohit Vyas","MENTOR","9754605008","https://www.facebook.com/hak.jdg.5/","2020eeb1183@iitrpr.ac.in","9754605008","images/team/mentor/Mohit_Vyas_2020EEB1183.jpg"),
("54","Neeraj","MENTOR","9034704368","https://www.facebook.com/profile.php?id=100011058065774","2020chb1047@iitrpr.ac.in","9034704368","images/team/mentor/Neeraj_2020CHB1047.jpg"),
("55","Nikunj Mahajan","MENTOR","9685871911","https://www.facebook.com/nikunj.mahajan.96","2020ceb1020@iitrpr.ac.in","9685871911","images/team/mentor/NikunjMahajan_2020ceb1020 (2).jpg"),
("56","Piyush Kushwaha","MENTOR","8449906375","","2020meb1299@iitrpr.ac.in","8449906375","images/team/mentor/Piyush_kushwaha_2020meb1299.jpeg"),
("57","Prachi","MENTOR","8527997951","","2020eeb1084@iitrpr.ac.in","8527997951","images/team/mentor/Prachi_2020EEB1048.jpg"),
("58","Pramanshu Arya","MENTOR","8435364878","","2020ceb1023@iitrpr.ac.in","8435364878","images/team/mentor/Pramanshu_Arya_2020ceb1023.jpg"),
("59","Pranavkumar Mallela","MENTOR","9502201858","https://www.facebook.com/pranavkumar.mallela.7/","2020csb1112iitrpr.ac.in","9502201858","images/team/mentor/PranavkumarMallela_2020CSB1112.jpg"),
("60","Pratham Kundan","MENTOR","8512092333","","2020csb1114@iitrpr.ac.in","8512092333","images/team/mentor/PRATHAM KUNDAN_2020CSB1114.jpg"),
("61","Princy Malhotra","MENTOR","7015923300","","2020mcb1193@iitrpr.ac.in","7015923300","images/team/mentor/Princy_Malhotra_2020mcb1193.png"),
("62","Priti Shekhawat","MENTOR","6378945241","","2020eeb1194@iitrpr.ac.in","6378945241","images/team/mentor/priti_shekhawat_2020eeb1194.jpeg"),
("63","Rahul Bansal","MENTOR","7508282934","","2020meb1305@iitrpr.ac.in","7508282934","images/team/mentor/RAHUL BANSAL_2020MEB1305.jpeg"),
("64","Rachakonda Akshith Sai","MENTOR","9618651903","","2020meb1304@iitrpr.ac.in","9618651903","images/team/mentor/Rachakonda Akshith Sai_2020MEB1304.jpg"),
("65","Raghav Patidar","MENTOR","9926514128","","2020csb1115@iitrpr.ac.in","9926514128","images/team/mentor/Raghav_Patidar_2020csb1115.jpg"),
("66","Rahul Vinod","MENTOR","9778183980","","2020mcb1244@iitrpr.ac.in","9778183980","images/team/mentor/Rahul_Vinod_2020mcb1244.jpg"),
("67","Rashil Goel","MENTOR","7042027118","https://m.facebook.com/100002615918488/","rashilgoel.goel@gmail.com","7042027118","images/team/mentor/Rashil goel_2020mmb1352.jpg"),
("68","Rishabh Garg","MENTOR","6284490346","","2020chb1051@iitrpr.ac.in","6284490346","images/team/mentor/rishabh_garg_2020.jpg"),
("69","Riya Yadav","MENTOR","7906009788","","2020meb1309@iitrpr.ac.in","7906009788","images/team/mentor/Riya_Yadav_2020meb1309.jpg"),
("70","Rohan","MENTOR","9463924746","https://www.facebook.com/profile.php?id=100057662856380","rohankhanna190@gmail.com","9463924746","images/team/mentor/Rohan_2020CSB1117.jpeg"),
("71","Rohitasv","MENTOR","7988136071","","2020ceb1026@iitrpr.ac.in","7988136071","images/team/mentor/Rohitasv_2020ceb1026.jpeg"),
("72","Sahil Gupta","MENTOR","9877985969","https://www.facebook.com/pawan.kumarseth.79","2020meb1310@iitrpr.ac.in","9877985969","images/team/mentor/Sahil_Gupta_2020meb1310.jpg"),
("73","Samual","MENTOR","9671588275","","2020mcb1249@iitrpr.ac.in","9671588275","images/team/mentor/Samual_2020MCB1249.png"),
("74","Sarbjot Singh","MENTOR","7696098488","","2020chb1054@iitrpr.ac.in","7696098488","images/team/mentor/Sarbjot_Singh_2020CHB1054.jpg"),
("75","Sarthak Chandra","MENTOR","8171162979","https://www.facebook.com/profile.php?id=100009106129382","2020eeb1205@iitrpr.ac.in","8171162979","images/team/mentor/Sarthak_Chandra_2020EEB1205.jpg"),
("76","Shruti sikri","MENTOR","8398805715","","2020csb1128@iitrpr.ac.in","8398805715","images/team/mentor/Shruti_sikri_2020CSB1128.jpg"),
("77","Siddharth Girdhar","MENTOR","8295593841","","2020eeb1209@iitrpr.ac.in","8295593841","images/team/mentor/Siddharth_Girdhar_2020EEB1209.jpg"),
("78","Sourish Maiti","MENTOR","7044973782","https://www.facebook.com/sourish.maiti.3","2020mmb1355@iitrpr.ac.in","7044973782","images/team/mentor/SOURISH MAITI_2020MMB1355.jpg"),
("79","SRI AMLAN ANSHU MOHANTY","MENTOR","9182340423","https://www.facebook.com/amlananshu.mohanty","2020eeb1211@iitrpr.ac.in","9182340423","images/team/mentor/sri amlan anshu mohanty_2020eeb1211.png"),
("80","Tushar Sharma","MENTOR","9936625240","https://www.facebook.com/profile.php?id=100057001343426","2020eeb1325@iitrpr.ac.in","9936625240","images/team/mentor/Tushar Sharma_2020EEB1325.jpg"),
("81","Vaibhav","MENTOR","7988042469","","2020csb1215@iitrpr.ac.in","7988042469","images/team/mentor/Vaibhav_2020csb1215.jpg"),
("82","Vaibhavi Patil","MENTOR","9325584243","https://www.facebook.com/badhir.kumar.1","2020mmb1359@iitrpr.ac.in","9325584243","images/team/mentor/Vaibhavi_2020mmb1359.jpg"),
("83","Vaidehi Patidar","MENTOR","9340651979","","2020chb1058@iitrpr.ac.in","7988042469","images/team/mentor/Vaidehi_Patidar_2020CHB1058.jpg"),
("84","Vardaan Gupta","MENTOR","6284582282","","vardaangupta2003@gmail.com","6284582282","images/team/mentor/Vardaan Gupta_2020MEB1328.JPG"),
("85","Vasu Bansal","MENTOR","9041190009","https://www.facebook.com/vasu.bansal.35110","2020eeb1217@iitrpr.ac.in","9041190009","images/team/mentor/VasuBansal_2020EEB1217.jpg"),
("86","Vedansh","MENTOR","8278291662","https://www.facebook.com/vedansh.garg.104","2020eeb1218@iitrpr.ac.in","8278291662","images/team/mentor/Vedansh_2020EEB1218.jpg"),
("87","Vinay Kumar","MENTOR","7988122161","","2020csb1128@iitrpr.ac.in","7988122161","images/team/mentor/Vinay_Kumar_2020csb1141.jpg"),
("88","Vishnusai Janjanam","MENTOR","8849554358","","2020csb1142@iitrpr.ac.in","8447807292","images/team/mentor/Vishnusai_Janjanam_2020CSB1142.png"),
("89","Yadwinder Singh","MENTOR","7710603791","","2020csb1143@iitrpr.ac.in","7710603791","images/team/mentor/yadwinder_2020.jpeg"),
("90","Yashasweni Mathur","MENTOR","7879963683","","2020meb1334@iitrpr.ac.in","7879963683","images/team/mentor/Yashasweni_2020meb1334.jpg"),
("91","Yatin","MENTOR","8901184441","","2020eeb1224@iitrpr.ac.in","8901184441","images/team/mentor/yatin_yadav_2020.jpeg"),
("92","Yatin Saini","MENTOR","8727918195","","2020meb1335@iitrpr.ac.in","8727918195","images/team/mentor/Yatin_Saini_2020MEB1335.jpg"),
("93","Avinash Chandra Singh","Ex-SECRETARY","","","","","images/team/prev_core/2018chb1038.jpg"),
("94","Aman Bhoria","Ex-CO-SECRETARY","","","","","images/team/prev_core/2018ceb1003.jpg"),
("95","Danish Qamar","Ex-ONLINE COUNSELLING HEAD","","","","","images/team/prev_core/2018meb1299.jpg"),
("96","Mohit Kasaniya","Ex-CO-SECRETARY","","","","","images/team/prev_core/2018ceb1014.jpg"),
("97","Yash Mittal","Ex-WEB-DEVELOPER","","","","","images/team/prev_core/2019eeb1210.jpg"),
("98","Pankhuri Saxena","Ex-CO-SECRETARY","","","","","images/team/prev_core/2019eeb1180.jpg");


/*Index Carousel Table*/

CREATE TABLE IF NOT EXISTS `carousel` (
  `serial` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `carousel` (`serial`, `name`) VALUES
('0', 'slide_1.jpg'),
('1', 'slide_2.jpg'),
('2', 'slide_3.jpg'),
('3', 'slide_4.jpg'),
('4', 'slide_5.jpg'),
('5', 'slide_6.jpg'),
('6', 'slide_7.jpg'),
('7', 'slide_8.jpg');

/*FAQs Table*/

CREATE TABLE IF NOT EXISTS `faqs` (
  `cat` varchar(10) NOT NULL,
  `ques` varchar(2000) NOT NULL,
  `ans` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `faqs` (`cat`,`ques`,`ans`) VALUES
  ("acad","How is evaluation and grading done?","Evaluation in each semester comprises a mid semester and an end semester exam, along with quizzes, practicals etc. depending on the course and the course coordinator.
  <br><br>
  Grading Scheme-
  <br><br>
  Each subject has some credits, and the grade is assigned on the basis of the performance either relative or absolute as decided by the course coordinator. The various grades that can be assigned are:
  <br><br>
  A == 10 || A- == 9 || B == 8 || B- == 7 || C == 6 || C- == 5 || D == 4 || E == 3 || F == 2 || I == Incomplete
  <br><br>
  Grades upto D are considered pass, beyond D (ie E, F) are considered fail. However if a student cannot complete the course for some reason, he/she may be awarded an I. These courses may be completed in coming semesters by the student to get a degree. The final semester grade point is calculated as the credit weighted average of the grades.
  <br><br>
  <b>Eg.</b> If a student has three courses in a semester say sub1(4 credit course),sub2(3 credit course) and sub3(4 credit course) with grade B, B-, A- respectively, then the semester grade point will be (4*8 + 3*7 + 4*9)/(4+3+4) = 8.09"),
  ("acad","What all courses will I be taught in the first year?","In the first year, it is aimed that students should be given an introduction to most of the core branches. So we have<br>
  1. Introduction to computing<br>
  2. Principles of electrical engineering<br>
  3. Physics<br>
  4. Chemistry<br>
  5. Mathematics (Calculus and Linear Algebra)<br>
  6. Various labs including Mechanical Workshop and Engineering Drawing<br>
  7. English<br>
  8. Other courses that may help in upcoming semesters<br><br>
  This scheme is designed to aid you in having an overview of other branches. This is done as all branches of engineering are somehow interdependent and in todayâ€™s era one needs to link them to scale heights in their field. Also this will help you freshers to choose wisely at the end of first year whether to change your branch based upon your CGPA or not."),
  ("acad","What is the procedure of grading?","Grading is primarily done in two ways:<br>
  1. <b>Relative Grading:</b> Your grade is governed by the overall class performance, that is the highest marks, class average, standard deviation, etc. The range of marks for a grade varies accordingly.<br>
  2. <b>Absolute Grading:</b> As the name suggests, your grade won't depend on the overall class performance. The range of marks for a particular grade is fixed."),
  ("acad","What is the difference between CGPA and SGPA?","SGPA stands for Semester Grade Point Average whereas CGPA is the Cumulative Grade Point Average. The credit weighted average of all the courses in a particular semester gives the SGPA whereas CGPA = total credit average of SGPA of all semesters."),
  ("acad","Are there any scholarships or fee concession programs we can apply for?","The institute offers Merit-cum-Means scholarship to about 25% of the students. The recipients of the scholarship are exempted from paying the tuition fee and get a scholarship of Rs.1000/- per month. The criteria for the same are based on the ALL INDIA RANK (AIR) in the JEE and financial background (only those students are eligible, whose parental income is below Rs.4.5 lac per annum). Further as per IIT rules, there is a limit that the total scholarship received from all sources for a student should not exceed Rs.50,000/- per annum. IIT Ropar also provides Institute Free Studentship to 10% of the students on the basis of financial background only. The recipients of the free studentship are exempted from paying the tuition fee. The criterion of 10% free studentship is similar to that of MCM Scholarship. Also all SC and ST category students are given full tuition fee waiver irrespective of their parent's / guardian's income. Besides these, the institute also offers merit prizes and certificates to the top 7% of the students of each 4-year B.Tech program for 1st and 2nd Semester. The value of the merit prize is Rs.2500/-. Many other organizations in India and abroad also offer some assistance to the students of IIT Ropar."),
  ("acad","What is the mode of payment of fees?","As of now, you can pay the fees in either of the following two modes:
  <br>
  1. <b>Online mode:</b> SBI Collect
  <br>
  2. <b>Offline mode:</b>
  <br>
  a) Cash deposit at IIT Ropar, SBI branch<br>
  b) Demand draft in favor of &#x22;DIRECTOR, INDIAN INSTITUTE OF TECHNOLOGY ROPAR,HOSTEL A/C&#x22; (Account No. 30836912866) payable at Roopnagar (Punjab)."),
  ("acad","What are the placement statistics for IIT Ropar?","Placement Statistics for 2019-20: 85% of students are placed, which comprises 97.5% students from CSE, 85.71% from EE and 79.31% from ME.
  <br><br>
  Detailed placement statistics can be found <a href='http://www.iitrpr.ac.in/TP/index.php/placement-stats/' target='_blank' rel='noopener noreferrer'>here.</a>
  <br><br>
  Breaking the stereotype of IT companies hiring most IIT students, IIT-Ropar students got most of the job offers from auto giants Mahindra & Mahindra, Tata Motors, SML Isuzu, and construction company Larsen and Tourbo.<br>
  &#x22;I am happy that the institute has broken all previous placement records, but what pleases me more is the fact that most of the placements have been made in core engineering companies. We have seen a 20% rise in such companies hiring our students,&#x22; said IIT-Ropar director Professor Sarit Kumar Das.<br>
  IIT Ropar registrar Sanjay Bhatnagar said 42 companies came to the campus for recruitments, including public sector undertakings (PSUs) like Indian Space Research Organization (ISRO) and Bharat Dynamics. &#x22;One of the students has even secured an international placement,&#x22; he said.<br>
  IIT-Ropar head of training and placement Ravi Mohan Parsad said the placement season also saw an increase in the number of students opting for the option. &#x22;Companies like Infosys, Amazon, Arista Networks, Saavn, Timetooth Technologies, and Vehant Technologies recruited our students. Along with them, a large number of first time recruiters like Deloitte, Takshashila Consulting, DEShaw, Directl, BookMyShow, Tesco, Smartpix, Chegg India also took part in this year's placements, said Dr Ravi Mohan Parsad. International companies like Works Applications and Tonichi Insatsu also took part in the annual placement,&#x22; he said."),
  ("acad","Which companies approach IIT Ropar for placements?","Some of the past recruiters are Amazon, Microsoft, EBay, Flipkart, Hyundai and Zomato.<br><br>
  Detailed list of past recruiters can be found <a href='http://www.iitrpr.ac.in/TP/index.php/past-recruiters' target='_blank' rel='noopener noreferrer'>here.</a><br><br>"),
  ("acad","What are the available branches for a Btech student at IIT Ropar?","There are currently 7 branches available for the B.Tech programme:
  <br>
  1. Civil Engineering<br>
  2. Chemical Engineering<br>
  3. Computer Science<br>
  4. Electrical Engineering<br>
  5. Mathematics and Computing<br>
  6. Mechanical Departments<br>
  7. Metallurgical and Materials Engineering."),
  ("acad","What are the features of New Curriculum at IIT Ropar?","The New Curriculum of B.Tech Programme is based on education theories/curriculum theory which focuses on hands-on-learning technique, giving students an opportunity to link with the society and to address their problems by engineering principles, and also giving emphasis to creativity and innovation."),
  ("acad","How many options are available for BTech course?","There are four options available for the students: 1. BTech, 2. BTech with Minor, 3. BTech with Concentration, and 4. BTech with Honors."),
  ("hostel","How are hostels allotted to freshmen? Does my hostel change every year? How many students live in a room?","Allotment of hostels is done while keeping in mind the required interaction among the freshers. Room allotment is completely random. The first and second year ug students are accommodated in rooms of two and others in single rooms. There are three hostels for boys, Chenab, Sutlej and Beas and one for girls, Raavi. There is a separate Air-Conditioned mess, where all students can dine simultaneously."),
  ("hostel","I have never lived in a hostel before. What should I expect from IIT hostels?","Hostel life is going to be very different from your home. In the beginning you may feel the need of a larger room where a smaller number of students live, but at the end of your stay, you would be crying to stay back. You are going to cherish your hostel memories for the rest of your life. Apart from academics and co-curricular activities, hostel life plays a major role in shaping one's life. Away from parents and siblings, hostel life has a lot to offer. It inculcates in you, a bit of sincerity, a shred of responsibility, and a great sense of adjustment. Living in a hostel shapes your personality and teaches you time management. You could expect a nice hostel life here as the hostels are newly constructed and are filled with a number of facilities required that you will never forget."),
  ("hostel","What facilities are available in the hostel?","The facilities available in the hostels of the institute are as follows:<br>
  1. Laundry service (paid - nominal rates)<br>
  2. A well-equipped gymnasium<br>
  3. 24-hour electricity backup<br>
  4. Common room (TV room which is no less than a theatre during cricket and football finals)<br>
  5. RO filtered water<br>
  6. Open terrace<br>
  7. Gallery for better ventilation<br>
  8. Bathroom equipped with geysers<br>
  9. Individual almirahs<br>
  10. Room cleaning service<br>
  11. Wi-Fi zone and high speed LAN port (unlimited data download) is available in each room which also enables intra-hostel data sharing.<br><br>
  In case of any problem, the caretaker is always approachable (Office timings). There will be a student hostel representative for each hostel to listen to your problems and present them to the hostel committee.<br><br>
  Visit <a href='blogs/facilities.php'>this</a> blog for more details."),
  ("hostel","What about the mess food? Is the food tasty and healthy? Do we have a say in the menu?","There are 2 common air-conditioned messes for the students. Mess fees are included in the hostel fee and are to be paid every semester. Quite honestly, it would be an overstatement to say that mess food is tasty when you would be coming here after eating home-cooked food for almost 18 years of your life. However, it is hygienic, nutritious, satisfying, and already paid for.<br><br>
  A weekly menu is decided at periodic intervals and is usually fine. Every resident has a say in deciding the weekly mess menu through the complaints and suggestion forms provided from time to time by the mess committee, which itself is a body made up of students. Also, there is a complaint register available in the mess in case you find the quality of food degraded or have any other complaint regarding the food. Feedback is always welcomed. For immediate actions, you can also contact the mess representatives."),
  ("hostel","Is there any ragging at IIT Ropar? What if some senior approaches us?","IIT Ropar has a zero-tolerance policy. We do not accept ragging in any form. In case of any uncomfortable situation arising, please inform us. It is to be noted, however, that seniors might approach you and interact with you asking you simple questions regarding your branch, hometown, personal interests, hobbies, etc. If at any point of the interaction, you feel uncomfortable, you must let him/her know and be rest assured that he/she will leave you alone. In case he/she doesn't, you can always contact the authorities."),
  ("hostel","What about cleanliness in hostels?","Your rooms, washrooms, and bathrooms are cleaned daily by the sweepers. However, to maintain cleanliness is your responsibility. In case of improper functionality, you can contact the caretaker or the Hostel Representative of your hostel."),
  ("hostel","What about the weather in Ropar?","You could enjoy and feel every weather to a great amount in Ropar (especially, if you are coming from places like Gujarat, Hyderabad, etc. you will feel as if the weather is at its extreme here). Weather at Ropar is hot and humid in summers extending till the end of July. You are suggested to keep a handkerchief/napkin with you. Monsoon is pretty pleasant, starting from August to mid-September. Winter starts from October and extends till the first week of February, with temperature as low as 5-6 degrees. You are advised to get warm winter clothing during December and January."),
  ("hostel","What about security and medical facilities?","Security guards guard your hostel as well as campus all the time. Though, remember to lock your almirahs and room for proper security of your personal belongings.
  <br><br>
  A Medical centre is present in the Utility Block. A doctor and a nurse are always present to treat any medical emergency at any point in time. College ambulance is also available 24*7 at the service. In case of serious problems, free tests are also done in some of the Ropar hospitals and laboratories on proper recommendation by the doctor on the campus."),
  ("hostel","Where should I dry my washed clothes?","Hostels are equipped with common washing machines, along with a laundry person, which takes a nominal price. All hostels have space to dry clothes in direct sunlight. For ground floors, there are clotheslines to dry the clothes, whereas for upper floors, a gallery is sufficient."),
  ("hostel","What to do after reaching college?","After you reach the college, you need to register yourself first, for college as well as for hostels.<br>
  Hostels are well equipped with LAN and WiFi. You will not be able to access them immediately but, you can, in a day or two, after you get user id and password from the IT section at IIT Ropar.<br>
  Register yourself with the library as soon as possible, as it will be the sole source for your initial study. This registration will issue you the institute ID Card.<br>
  Get your bonafide certificates on the first or very next day as it will help you to get a new mobile connection and a bank account at the IIT Ropar branch of SBI.<br>
  Get yourself an account at SBI branch IIT Ropar asap, as it will be the only account you can handle and easy access from the campus for your stay on campus.
  <br><br>
  After that, ISMP waits for you. Different clubs organize different activities to make you familiar with their clubs and to know your interests. One or two trips are also organized to nearby places of Ropar."),
  ("hostel","What are the documents required at the time of registration?","The following ORIGINAL documents are preferred with at least 2 attested photocopies:<br>
  1. Class X certificate and marksheet<br>
  2. Class XII certificate and marksheet<br>
  3. If your DOB is not mentioned in Class X certificate, then bring a proof of DOB <br>
  4. Caste Certificate (if applicable)<br>
  5. JEE Branch and institute allotment letter, admit card<br>
  6. 10 passport-sized coloured photos (though you must carry more, that you'll need around the year)<br>
  7. 5 stamp-sized coloured photos.<br>
  8. Receipt of payment with JEE and Hostel Fee Challan.<br>
  9. Medical Certificate (attested by a registered medical officer)<br>
  10. If applicable, bring an affidavit for the gap of study<br>
  11. If applying for a scholarship, bring an affidavit/certificate of income of parents duly attested by first class magistrate/Tehsildar/Revenue Officer. If parents are govt. employees submit copies of IT Returns from their employers also.<br><br>
  <b>Note: Please read the instructions carefully on www.iitrpr.ac.in for latest updates regarding documents.</b>"),
  ("hostel","How to reach IIT Ropar? What is the location of IIT Ropar?","One can reach IIT Ropar by different means.
  <br>
  <b>By Road:</b> One can travel by road on his own vehicle. The roads are quite well maintained.
  <br><br>
  <b>By Air:</b> The nearest airport is in Chandigarh, about 48 kilometres from Rupnagar. Any interested visitor wishing to come to Rupnagar/Ropar could take a flight from his/her respective place to Chandigarh (if a direct flight to Chandigarh is not available then a flight from Delhi to Chandigarh). There are regular running flights from the capital to Chandigarh. Further, one can take a taxi or a bus from Chandigarh Airport, which would take about 2 hours on the higher side to reach the Main Campus of Indian Institute of Technology Ropar (IIT Ropar).
  <br><br>
  <b>By Train:</b> Train is one of the cheapest and comfortable means to travel. Regular trains are plying between Delhi and Rupnagar. The Delhi-Ambala-Una railway line passes through Rupnagar. The duration of the journey is around 6 hours from Delhi. Anyone wishing to visit the campus may also take a train from his/her place to Ambala or Chandigarh, and then a taxi ride or one can board a bus to the IIT Ropar Transit Campus, It just takes around 1-1.5 hours. From the Transit Campus, regular buses are available for IIT Ropar Main Campus.
  <br><br>
  Daily trains between Delhi and Roopnagar(ROPAR):
  <br>
  1. Delhi To Ropar: Jan Shatabdi (12057); Himachal Express (14553)<br>
  2. Ropar to Delhi: Jan Shatabdi (12058); Himachal Express (14554)
  <br><br>
  From all over India, there are multiple trains to Chandigarh (56 km from IIT Ropar) and Ambala (80 km from IIT Ropar). Ropar railway station is around 8 km from IIT Ropar campus. There will be a campus bus available on railways station to IIT Ropar from time to time.
  <br><br>
  <b>By Bus:</b>
  <br>
  From Delhi: All buses going towards  Mandi, Manali, Nangal, Una, Anandpur Sahib go via Ropar.
  <br>
  From Chandigarh: In addition to Mandi, Manali, Una buses, all buses going towards Amritsar, Jalandhar, Hoshiarpur go via Ropar.
  <br>
  Ropar bus stand is around 7 km from IIT Ropar. It is better to get off at the old bus stand of Ropar as it is slightly nearer. From there, one can go for a cycle-rickshaw or auto are easily available.
  <br>
  Hoping to see you soon :) !!!!
  <br><br>
  Maps and addresses are also available in the '<a href='contact_us.php'>Contact Us</a>' section."),
  ("hostel","What are the necessary things that I should buy?","Some of the things that you should buy either from utility block or your hometown are:<br>
  <b>Scientific Calculator</b> - fx 991 ES (preferably) or Fx 991-MS. You will need this more than your books for the next four years (right from your first semester). So, it is better to buy it from home.
  <br>
  <b>A well-conditioned medium-size college bag.</b> A bag to carry books, notebooks, and a laptop.
  <br>
  <b>Lab Coats:</b> A blue lab coat is required for Mechanical Workshop and a white one is required for Chemistry Lab. They are available in Utility Block, or you can borrow from your seniors.
  <br>
  <b>Drafter:</b> A drafter is also needed for Engineering Drawing Subject.
  <br>
  But no special need of buying daily stuff like a bucket, mug, and mattresses from home as they will be available to buy inside the campus on the day of registration.
  <br>
  Some locks and keys as you will have to lock your luggage on the first day as it will be very busy. After that, it will be ok."),
  ("hostel","Are there any guidelines for mentors? Am I safe with them?","Following is the Mentoring Code of Conduct. So you are most safe with them.
  <br><br>
  <b>Aim:</b>
  <br>
  The code of conduct is designed to establish a set of guidelines to create a benchmark for ethics and good practice and ensure that mentors conduct their practice in a professional yet friendly and ethical manner. The code is also meant to inform mentees and to promote public confidence in the Institute Student Mentorship Program (ISMP) as a process for personal and professional development.
  <br><br>
  <b>Code of Conduct:</b>
  <br>
  1. Commit to the relationship and the ISMP for one full academic year.
  <br>
  2. Attend and actively participate in all mentoring training and special events, and in the long run, suggest and execute any idea relevant to the ISMP.
  <br>
  3. Trust and confidentiality are the backbones of successfully mentoring and must be maintained at all times. Be careful about sensitive issues. A mentee's personal life may be difficult to discuss early in the relationship.
  <br>
  4. Should abide by all rules set up by the Proctorial Committee during the initial interaction and period. All meetings with freshers should happen in open and visible regions and not in any closed rooms.
  <br>
  5. No illegal drugs/alcohol/tobacco should be promoted or consumed within the mentorship activities/meetings.
  <br>
  6. Never use physical discipline/abusive language/ultimatums as a tool for putting your point across. Any instance of ragging during mentorship activities is strictly forbidden and will be reported to concerned authorities.
  <br>
  7. Failure to comply or an outright violation of any of the above may lead to termination from the ISMP for all purposes."),
  ("hostel","At the time of registration, are my parents allowed to stay with me in the hostel?","No, they (only the same gender one) are only allowed to go to your rooms during the day time. At night, they are not allowed to stay with you. You need to book hotels for their stay."),
  ("hostel","How is life within a small town like Ropar?","Ropar is a small town known for its rich culture and heritage. There are several eatouts, super markets, a big town market, places of tourist attraction, hiking and bicycle trails. Although it is self-standing when it comes to the basic facilities that one might expect from a typical indian town, if one wants to enjoy the comforts and facilities of a mega city, chandigarh is hardly an hour's drive from the campus."),
  ("hostel","What are the places near IIT Ropar to travel?","Visit <a href='blogs/places_to_visit_near_ropar.php'>this</a> blog."),
  ("infra","What about college library?","There is a 24*7 college library available to the students. The institute library has wide range of texts of the latest publications. It also has renowned journals and magazines. Apart from books of academic interest, there are several titles of general interest genre such as biographies, popular science, fiction etc. The library provides LAN and Wi-Fi for access to online information. It also has an online catalogue named OPAC. Through this you can search for, and reserve books from your room, without even coming to the library. Moreover to ensure that the students study peacefully and comfortably the library houses spacious air-conditioned cabins with charging connections and internet services available along with many more study tables for students."),
  ("infra","I like playing sports. What are the sporting facilities available at IIT Ropar?","Sports is a major part of a student's life. Sports are a really important mode of recreation for all students. It is encouraged to play at least one sport. Sporting facilities that are made available are:<br>
  1. Lawn Tennis courts<br>
  2. Cricket ground<br>
  3. Volleyball courts<br>
  4. Football ground<br>
  5. Ground for athletic events<br>
  6. Badminton courts<br>
  7. Hockey ground<br>
  8. Table Tennis tables<br>
  9. Basketball courts<br>
  10. Chess boards (in each hostel)<br><br>
  Moreover, college provides a certain number of sporting instruments too. However, it is advised to the students to get their own sports instruments. In case you need anything you can always contact the Sports Secretary or the respective sport representative.
  <br><br>
  Coaches are also available to train you for learning the sport as well as for performing better in Inter-IIT Sports Meet."),
  ("infra","Is there any auditorium in the college?","There is a large hall in RadhaKrishnan Complex. It is large enough to hold all the students and is used for organizing all the extra- curricular events in the college including the research conclave, fresher's night, guest talks and other socio-cultural events.<br><br>
  DJ Nights and Star Nights of fests are organized in open grounds, which adds on a natural flavor to events.<br><br>
  The main auditorium is under construction and expected to be ready soon."),
  ("infra","What about the classrooms and laboratories in the college?","The campus consists of air-conditioned classrooms in Lecture Hall Complex, with a seating capacity of more than 150. The classrooms are spacious with comfortable seats for the students to study comfortably. In addition, there are different lecture rooms dedicated to each department.
  <br><br>
  Practical approach is the key to learning which is encouraged. It is ensured that students get accustomed to the laboratory atmosphere before starting the experiment and know well in advance about all the safety measures which have to be taken care of in the laboratory. Laboratories like Physics, Chemistry, Computer and Design & Manufacturing etc. are made available with well- equipped and advanced machinery. It is made sure that students are well instructed before starting any working session."),
  ("infra","I like dancing/music/working out. Are these facilities available?","There are individual clubs for them. There is a music room which is well equipped with acoustic guitars, bass guitars, tablas, drums set, congas, mics, amplifiers, etc. is located in Utility Block. Jamming sessions are also organized on weekends and they provide a soothing experience.
  <br><br>
  Under Dance Club, bhangra and western dance are the main sub categories. Several workshops are held from time to time for practice and exploration.
  <br><br>
  For all those who like working out, there is a well-equipped gymnasium in Sutlej Hostel which remains open from 6am to 8:30 am in morning and 5:30 pm to 9pm in evening. You can contact the respective club representatives anytime if you need any help regarding the above mentioned activities."),
  ("infra","Like old IITs, is any cultural fest organized in IIT Ropar?","Yes, IIT Ropar organises its 3 day long Cultural fest, the ZEITGEIST annually. Various cultural events, star nights, competitions are held during Zeitgeist. Numerous celebrities like Mohit Chauhan, Vishal-Shekhar, Hawas Group, Gajendra Verma, Sharry Mann, Ranjit Bawa, Diljeet Singh Dosanjh, DJ Olly, Zakir Khan, SITAR Metal Band and Zephyrtone have graced the stage of ZEITGEIST. It's a never before experience. It is one of the biggest stages that IIT Ropar provides you to showcase your talent. It's a treat to see such magic unfold against your eyes. It becomes an experience of lifetime for you.
  <br><br>
  To know more about Zeitgeist, read the blog <a href='blogs/zeitgeist.php'>here</a>."),
  ("infra","Do IIT Ropar organise sports or technical fests of their own?","IIT Ropar organizes both the sports fest, Aarohan and the technical fest, Advitya which are just amazing and adds a lot to the college memories of yours.
  <br><br>
  BOSA organizes AAROHAN, the annual sports fest of IIT Ropar where students from various prestigious colleges come to IIT Ropar and participate in various sports to compete for the gold.
  <br><br>
  IIT Ropar held the fourth edition of its annual technical Fest Advitiya, in 2020. Advitiya 2020 had the scientific spirits soaring and the technological temper ablaze. The events, workshops and talks organized at Advitiya are strategically aligned with the present day needs and offers a takeaway of fun and knowledge.
  <br><br>
  Various events, DJ nights and comedy shows are organized. All clubs take part actively in organizing their events, as well as in participating in their own events.
  <br><br>
  Read the blog for Advitiya <a href='blogs/advitiya.php'>here.</a>
  <br><br>
  Read the blog for Aarohan <a href='blogs/aarohan.php'>here.</a>"),
  ("infra","Are there any inter college events in IIT?","Every year, Inter IIT Meets are organized, in which teams from various IITs participate and showcase their talent.
  <br><br>
  Technical, Sports and Cultural Meets are organized so that you can participate in the field you like. Moreover, due to less strength of students in IIT Ropar, there is a greater probability that you can get a chance to participate in it in the first year itself :)."),
  ("infra","Which are the various clubs/societies working in the college?","Following is the list of clubs in the college:<br>
  1. Undekha - Dramatics club<br>
  2. D-Cypher - Dance club<br>
  3. Arturo - Photography club<br>
  4. Alankar - Music club<br>
  5. Vibgyor - Fine arts club<br>
  6. Coding club<br>
  7. FinCOM - Finance and Economics<br>
  8. Robotics club<br>
  9. Zenith - Astronomy club<br>
  10. Monochrome - Video editing and Animation club<br>
  11. SoftCOM - Software Community<br>
  12. Aeromodelling club<br>
  13. Automotive club<br>
  14. CIM<br>
  15. DebSoc - Debating club<br>
  16. Enigma - Quizzing club<br>
  17. MuN club<br>
  18. Communication and Public Speaking Club<br>
  19. Movie Screening Club<br>
  20. Alpha - Movie making club<br><br>
  Apart from these clubs we have other organisations that are very much active in their working like SME (Society of Mechanical Engineers), Enactus, Pehchaan-Ek Safar, and BloodConnect. In the first week of the academic year, the representatives will conduct an orientation programme telling the freshers about the different clubs/organisations and their activities. The doors of these clubs are always open for all. You all have worked hard for the past two years, this is your opportunity, seize it.
  <br><br>
  Links to pages of these clubs are provided in the footer of the website (Quick Links)."),
  ("infra","What if I become a victim of depression and feel homesick?","Well, when you stay away from your home it's natural for you to feel homesick. It will take some time for you to adapt to a â€˜IIT lifestyleâ€™. Whenever you face depression, you can consult the Counselling Centre located at Utility Block of the college. Confidentiality is strictly maintained. Also, spending some time with your friends would help you cope up with depression. Feel free to approach seniors, as they have already gone through such a phase and can give you good advice."),
  ("infra","I have an interest in participating in events that take place in different colleges. How do I go about it?","IIT Ropar actively participates in the events that take place in other colleges be it cultural, technical or sports. The college encourages its students to participate. The college even provides funds to the students participating if the student has prior permissions from the required representative."),
  ("infra","I am a shy guy. How do I improve my social skills?","The college hosts a variety of events throughout the session. Some of them are :-
  <br><br>
  <b>Samagam</b>, a weekly event that is a tradition of our college and this helps in nurturing the talent in all the students.
  <br>
  <b>IBCC</b> is the annual inter batch cultural championship which brings out the best in each student.
  <br>
  <b>Quintessence</b> is our annual intra-college technical fest that aims at improving the technical skills of the students and encourages innovative and lateral thinking.
  <br>
  <b>Inter Batch Sports Championship</b> is also held every year to promote sports in the college.
  <br>
  Above all, <b>GC (General Championship)</b> is being organised starting from this year itself just like all the old IITs and comprises events from all the three domains mentioned above."),
  ("infra","Is there any counselling cell in IIT Ropar?","This institute has a lot to offer for its students, in terms of academics, co-curricular and extracurricular opportunities. With the increased opportunities, often come related problems like stress, anxiety or depression. On face value, these problems might seem trivial, but they end up affecting us in a negative manner. Hence, one should reach out for help.
  <br><br>
  IIT Ropar houses a great counselling cell consisting of excellent counsellors. Here is an attached PDF for details about IIT Ropar's Counselling cell."),
  ("infra","If I want to make robots, cars and quadcopters, where should I go?","The clubs like Aeromodelling Club, Robotics Club and Automotive Club provide you these types of opportunities. Various events (inside and outside the college) are organised  in which these activities are carried out in the form of teams. Appropriate financial support is also provided if proper proposals are presented in advance.<br><br>
  There is a mechanical workshop, in which various tools and machines (including 3D Printer, Lathes, CNC etc.) are available. With prior permission, these are made available for making projects."),
  ("infra","I like coding, but don't have laptop? Will it affect my coding?","Certainly not. Well equipped computer labs are present in the CSE Block with Ubuntu Operating System. Coding club is also there to teach you and help you progress. Competitions are also held in Advitiya (Technical Fest) for competitive programming."),
  ("infra","I like to watch movies. Is there any theatre in the college?","Movie Screening Club is an active club, which streams 1-2 movies per month. They are shown in lecture hall-cum auditorium (M6) present in LHC. For new releases, you can always go to malls like Elante Mall, Chandigarh or VR Punjab which are at a distance of almost 1-2.5 hours travel."),
  ("infra","I like photography. What are the facilities?","Arturo Club (Photography Club of IIT Ropar) captures all events that are organised in college. For photography enthusiasts, it is the appropriate club. Various sessions are also conducted in which students are taught how to operate DSLR,  photography techniques and the use of editing softwares."),
  ("infra","What are fests?","Fest is a time when you can relax yourself from the academics. You can participate in events and competitions that are held in it, which helps you to learn teamwork. Along with that, you can organise events. Managing an event will definitely bolster your confidence. Star Nights, DJ Nights and Comedy Shows are times when you can let go all your worries and create some amazing memories."),
  ("infra","How are the computing and internet/wifi facilities at the institute?","The institute is equipped with a 24 hour general computer lab facility with all the standard softwares. The campus provides super fast internet facilities in hostels and academic area. LAN and wifi are available in each room of hostels."),
  ("infra","What is ISMP?","Visit <a href='blogs/ismp.php'>this</a> blog.");
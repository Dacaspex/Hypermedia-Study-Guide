-- noinspection SqlDialectInspectionForFile



-- noinspection SqlNoDataSourceInspectionForFile



INSERT INTO `programs`

  (name, slug, type, contact) VALUES('Software Science', 'software-science', 'bachelor', 'some@email.com');

SET @ss_id = LAST_INSERT_ID();



INSERT INTO `programs`

  (name, slug, type, contact) VALUES ('Psychology & Technology', 'psychology-technology', 'bachelor', 'some@email.com');

SET @pt_id = LAST_INSERT_ID();



INSERT INTO `pages` (name_en, name_nl, slug, type) VALUES

  ('Overview', 'Overzicht', 'overview', 'bachelor'),

  ('Curriculum', 'Rooster', 'curriculum', 'bachelor'),

  ('Program Learning Objectives', 'Leerdoelen', 'learning-objectives', 'bachelor'),

  ('Professional Skills', 'Professionele Vaardigheden', 'professional-skills', 'bachelor'),

  ('Final Project', 'Afsluitend Project', 'final-project', 'bachelor'),

  ('Examination Schedules', 'Tentamenrooster', 'examination-schedules', 'bachelor'),

  ('Graduation Dates', 'Slagings data', 'graduation-dates', 'bachelor'),

  ('Coaching', 'Begeleiding', 'coaching', 'bachelor'),

  ('Regulations', 'Regelementen', 'regulations', 'bachelor'),

  ('Subsequent Masters', 'Aansluitende Masters', 'subsequent-masters', 'bachelor'),



  ('Overview', 'Overzicht', 'overview', 'pre-master'),

  ('Curriculum', 'Rooster', 'curriculum', 'pre-master'),

  ('Binding Study Recommendation', 'Bindend Studie Advies', 'study-recommendation', 'pre-master'),

  ('Bachelor before Master', 'Bachelor voor Master', 'bachelor-before-master', 'pre-master'),

  ('15 Credits Regulation', '15 Punten Regelement','15-credits-regulation', 'pre-master'),

  ('Regulations', 'Regelementen', 'regulations', 'pre-master'),



  ('Overview', 'Overzicht', 'overview', 'master'),

  ('Admission', 'Toelating', 'admission', 'master'),

  ('Curriculum', 'Rooster', 'curriculum', 'master'),

  ('Professional Skills', 'Professionele Vaardigheden', 'professional-skills', 'master'),

  ('Honors Program', 'Honors Program', 'honors-program', 'master'),

  ('Exchange Program / Internship', 'Uitwisseling / Stage', 'exchange-program-internship', 'master'),

  ('Examination Schedules', 'examination-schedules', 'Tentamen data', 'master'),

  ('Graduation', 'Slaging', 'graduation', 'master'),

  ('Prior Bachelors', 'Voorafgaande Bachelors', 'prior-bachelors', 'master'),

  ('Regulations', 'Regelementen', 'regulations', 'master'),

  ('Coaching', 'Begeleiding', 'coaching', 'master');

INSERT INTO `content` (program_id, page_id, body) VALUES

  (@ss_id, (SELECT id FROM pages WHERE slug = 'overview' AND type = 'bachelor' LIMIT 1), '<h2>Software Science</h2>
<h3>The Result</h3>
<p>The Majors Software Science and Web Science are formally embedded in the Bachelor program Computer Science and Engineering (in Dutch: Technische Informatica). Consequently, after completing one of these Majors, you will receive the Bachelor\'s degree certificate in Computer Science and Engineering.</p>
<h3>Program Objectives</h3>
<p>The overall objective of the Bachelor program is to train and educate young professionals who are able to progress into an appropriate Master\’s program and/or are prepared to embark upon a professional career in the field of Software Science or Web Science.</p>
<p>Students are therefore expected to:</p>
<ol>
<li>acquire cognitive skills relating to computer science and engineering</li>
<li>acquire practical capabilities and skills relating to software design (the Web Science major focuses on complex internet-based applications, while the Software</li>
<li>Science major is more concerned with technical applications)</li>
<li>acquire professional and generic academic skills</li>
</ol>
'),

  (@ss_id, (SELECT id FROM pages WHERE slug = 'curriculum' AND type = 'bachelor' LIMIT 1), 'the curriculum page'),

  (@ss_id, (SELECT id FROM pages WHERE slug = '<h2>Program Objectives</h2>
<p>The overall objective of the Bachelor program is to train and educate young professionals who are able to progress into an appropriate Master\’s program and/or are prepared to embark upon a professional career in the field of Software Science or Web Science.</p>
<p>Students are therefore expected to:</p>
<ol>
<li>acquire cognitive skills relating to computer science and engineering</li>
<li>acquire practical capabilities and skills relating to software design (the Web Science major focuses on complex internet-based applications, while the Software</li>
<li>Science major is more concerned with technical applications)</li>
<li>acquire professional and generic academic skills</li></ol>
' AND type = 'bachelor' LIMIT 1), 'learning objectives page'),

  (@ss_id, (SELECT id FROM pages WHERE slug = '<h2>Professional Skills</h2>
<p>In addition to professional knowledge and engineering skills, graduates need skills to exercise their profession. This includes skills on communication, reflection, planning and organization.</p> <p>Therefore each Major includes the professional skills basic course, which is worth five ECTS. The skill lines are:</p>
<ol>
<li>presentation</li>
<li>writing</li>
<li>cooperation</li>
<li>reﬂection</li>
<li>planning and organization</li>
<li>looking up and processing (scientiﬁc) information</li>
</ol>
<p>These skill lines are embedded in the study components of the Major, as are the five ECTS associated with it. The total number of hours per skill line is spread over the three years of the degree program, giving individual students several practising and assessment opportunities per skill line. If learning objectives regarding professional skills are part of the learning objectives of the embedding study component, the skills will be formally assessed. In some cases passing the skill assessment is a requirement for completing the study component in which it is embedded.</p>
<p>All written feedback on your professional skills must be collected and archived by you. Based on the feedback you can decide on further development of certain skills. The feedback is also used when writing your reflection reports.</p>
<h3>PS learning objectives for Software Science</h3>
<p>Below, for each skill line the specific learning objectives are listed, its (relative) weight in the whole palet of professional skills, and the study components that assess these skills.</p>
<p>Note that practising opportunities are offered in many more components.</p>
<h4>PRESENTATION (10%)</h4>
<ul>
<li>the student is able to prepare and give an English presentation on a technical subject, attuned to the audience and the purpose of the presentation, adequately using tools supporting the presentation</li>
<li>the student is able to pitch herself</li>
</ul>
<p>Study components: 2IO70, 2IO90, 2IPE0</p>
<h4>WRITING (30%)</h4>
<ul>
<li>the student is able to adequately document her software products for future reference by peers, using standards common in the computer science field</li>
<li>the student is able to impart information, ideas and solutions in a written form, and in English, to either fellow specialists or a lay public</li>
</ul>
<p>Study components: 2IO70, 2IO90, 2IC60, 2IPE0</p>
<h4>COOPERATION (30%)</h4>
<ul>
<li>the student is a reliable and effective team member, taking responsibility for her allocated tasks, no free-rider</li>
<li>the student is able to give constructive feedback to her team members on their contribution and to react adequately to feedback from her team members</li>
</ul>
<p>Study components: 2IO70, 2IO90, 2IPE0</p>
<h4>REFLECTION (10%)</h4>
<ul>
<li>the student is able to reflect on her own role in the project team as well as on her contribution, if necessary attuning one or both</li>
<li>the student is able to reflect on her development as software/web scientist and if necessary to adjust her learning plans</li>
</ul>
<p>Study components: 2IO70, 2IO90, 2IPE0</p>
<h4>PLANNING AND ORGANIZATION (15%)</h4>
<ul>
<li>the student is able to plan and organize her own activities within a project</li>
<li>the student is able to adapt planning and organization when unforeseen circumstances occur</li>
<li>the student is able to use current methods and tools for organizing software engineering projects</li>
<p>Study components: 2IO70, 2IO90, 2IPE0</p>
<h4>FINDING AND PROCESSING (SCIENTIFIC) INFORMATION (5%)</h4>
<ul>
<li>the student is able to find and evaluate various sources of information and to adequately refer to them in written communication</li>
</ul>
<p>Study components: to be announced</p>
' AND type = 'bachelor' LIMIT 1), 'the professional skills page'),

  (@ss_id, (SELECT id FROM pages WHERE slug = '<h2>Final Project Bachelor Software Science</h2>
<h3>Content</h3>
<p>The knowledge and skills learned in the previous years will be applied in an integrated way in the final DBL project, a large and complex software engineering project.</p>
<p>By conducting this project you demonstrate your ability to develop large non-trivial software in a group context. Each project has a real-life external customer, who needs a software system/prototype that has to be developed. As such, the project eminently fits the learning outcomes related to Software design. A project group consists of approximately 8 students. They work almost full-time on the project. Every group has its own project room in preferably MetaForum.</p>
<p>Each group has a project manager and a quality manager (Master students that follow 2IP45).</p>
<p>Furthermore, each group has a technical advisor (staff member) to assist with technical questions and to review the technical documents.</p>
<h3>Prerequisites</h3>
<p>In order to get permission to take part, you need to have:</p>
<ul>
<li>at least 120 ECTS six weeks before the start of the project</li>
<li>passed the 2IPD0 or 2IP25 Software engineering course</li>
</ul>
<p>For more information, see the 2IPE0 course information</p>
' AND type = 'bachelor' LIMIT 1), 'final project page'),

  (@ss_id, (SELECT id FROM pages WHERE slug = '<h2>Examination Schedules</h2>
<p><strong>This is an universal page and is the same for every bachelor-program</strong></p>
<p>On this page you can find examination schedules. Select your program and period and you will find all examinations of obligatory courses of your program.</p>
<p>For more information about the course or examination, click on the course to go to OASE.</p>
<p>(Disclaimer: This  application is a beta-version. We tried our hardest to show you the best results. However, something may still go wrong. If you find any wrong results or missing results, please contact us. We will try to correct the problems as soon as possible.)</p>
' AND type = 'bachelor' LIMIT 1), 'examination schedules here'),

  (@ss_id, (SELECT id FROM pages WHERE slug = '<h2>Graduation dates</h2>
<p>In <a href=”https://osiris.tue.nl/osiris_student_tueprd/SetTaal.do?taal=en&bronUrl=/osiris_student_tueprd/StartPagina.do&event=setTaal”>Osiris</a> you can easily subscribe yourself for the upcoming examination session. You can do this by clicking on Progress and then Qualification request.</p>
<table><tr><th>PROGRAM</th><th>EXAM DATE</th><th>CLOSING DATE</th>
<tr><td>Software Science</td><td>27-mar-17</td><td>05-mar-17</td></tr>
<tr><td>Software Science</td><td>24-apr-17</td><td>26-mar-17</td></tr>
<tr><td>Software Science</td><td>29-may-17</td><td>30-apr-17</td></tr>
<tr><td>Software Science</td><td>26-jun-17</td><td>28-may-17</td></tr>
<tr><td>Software Science</td><td>31-aug-17</td><td>06-aug-17</td></tr>
</table> ' AND type = 'bachelor' LIMIT 1), 'graduation dates page'),

  (@ss_id, (SELECT id FROM pages WHERE slug = '<h2>Coaching</h2>
<h3>Spotting your career: a new way of coaching</h3>
<p>In the first year coaching will be focussed on choosing your electives.</p>
<p>In the second and third year we challenge you to explore what kind of career you want to strive for. What is needed for such a career? What do you want to develop during your student life?</p>
<h3>First year</h3>
<p>You have to submit your electives of the first year in the first quartile. Information on the electives will be provided in this study guide and in a special information session in week 4 of the first quartile. (Details on this session will be sent by email.) You will discuss your options and considerations with your mentor group. And on top of that, an e-counter will be provided where you can pose your questions or request a meeting with a teacher coach.</p>
<p>You have to submit your elective program for year 2 and 3 in the fourth quartile. Again, information will be provided by several media. And when in doubt, ask for a meeting with one of our experienced coaches.</p>
<h3>Choose your coach model in the second year</h3>
<p>From the second year on, we offer a choice:</p>
<ol>
<li>an on-demand version of coaching, where you can ask your question at the e-counter, or ask for a one-to-one meeting with a coach</li>
<li>a structured process of coaching, with group meetings every quartile, helping you to spot your career</li>
<li>a flexible process of coaching where you have a say in how to spot your career, and how to spend the group budget.</li>
</ol>
<p>Both for model 2 and 3 your commitment is required: prepare and actively attend the meetings. See manuals for more information.</p>
<p>Your win is the opportunity to explore what kind of career suits you best. And that helps in choosing your master program, or in or perhaps in deciding not to proceed in one. Maybe you decide to even change your elective program in the bachelor. And you will be much more confident and convincing when pitching yourself for a panel of recruiters (which is one of the assignments in the final bachelor project ....). As an extra incentive you will get an exemption for most reflection assignments in the third year (embedded in the final project). This opportunity is only provided for students who have been active in model 2 or 3 for the whole period.</p>
<p>You have to choose a model at the beginning of the second year. Enrollment through course code 2ICC2 (second-year students only).</p>
<p>In model 2 and 3 you will be assigned a group and a coach.</p>
<p>Over the year you can only switch to model 1.</p>
<p>At the beginning of the third year you can choose to switch from model 2 or 3 to model 1, or from 2 to 3, or from 1 to 2.Enrollment through course code 2ICC3 (third-year students only).</p>
<p>More information will be provided during the kick-off meetings in the first quartile.</p>
<h3>Advisors & Tutors</h3>
<h4>Bachelor Applied Mathematics:</h4>
<p>drs. S.M.A. Bruin</p>
<p>MF4.074</p>
<p>T: 040 247 4658</p>
<p>E: studycounselormath@tue.nl</p>

<p>the first year assisted by study advisor:</p>
<p>dr. B.M.M. de Weger</p>
<p>MF 6.098</p>
<p>T: 040 247 27 04</p>
<p>E: b.m.m.d.weger@tue.nl</p>

<h4>Bachelor Data Science:</h4>
<p>E. van den Hurk bc.</p>
<p>MF 5.099</p>
<p>T: 040 247 27 52</p>
<p>E: e.v.d.hurk@tue.nl</p>

<h4>Master Industrial and Applied Mathematics:</h4>
<p>dr. R.A. Pendavingh</p>
<p>MF 7.094</p>
<p>T: 040 247 45 99</p>
<p>E: r.a.pendavingh@tue.nl</p>

<h4>Bachelor Computer Science and Engineering, including Software Science and Web Science:</h4>
<p>dr. C.J. Bloo</p>
<p>MF 5.105</p>
<p>T: 040 247 44 96</p>
<p>E: studycounselorBCS@tue.nl</p>

<p>Y.H.M. Houben</p>
<p>MF 5.105</p>
<p>T: 040 247 44 96</p>
<p>E: studycounselorBCS@tue.nl</p>

<h4>(Pre-)Master CSE, BIS, ES, IST</h4>
<p>dr. N. Stash</p>
<p>MF 7.061</p>
<p>T: 040 247 23 22</p>
<p>E: n.v.stash@tue.nl</p>
' AND type = 'bachelor' LIMIT 1), 'coaching page'),

  (@ss_id, (SELECT id FROM pages WHERE slug = '<h2>Regulations</h2>
<p><strong>This is an universal page and is the same for every bachelor-program</strong></p>
<p>The PER is the Program and Examination Regulations for a program and contains clear and sufficient information about the program, making it the basic document for both students and teachers.</p>
<p>Subjects covered by the PER include:</p>
<ul>
<li>the content of the program and the associated final examinations, the number and sequence of other examinations and the times when these can be taken</li>
<li>the type of examination (oral, written or other types of examination)</li>
<li> the period of validity of successfully completed examination components</li>
<li> the right of inspection and evaluation</li>
</ul>
<p>The Higher Education and Research Act (Wet op het hoger onderwijs en wetenschappelijk onderzoek) draws a distinction between program and examination regulations and examination committee rules and guidelines. Subjects regulated by the TU/e Examination Committee Rules and Guidelines (Examination Regulations) include:</p>
<ul>
<li>compilation Examination Committee</li>
<li>procedures Examination Committee</li>
<li>tasks Examination Committee</li>
<li>rules relating to quality assurance of testing and exams</li>
<li>rules relating to measures taken in the event of fraud by examinees</li>
<li>rules and guidelines relating to testing and exams</li>
<li>compensation regulations</i>
<li>graduation regulations</li>
</ul>
<h3>Forms</h3>
<ul>
<li><a href=”https://static.studiegids.tue.nl/fileadmin/content/Faculteit_WenI/Bachelor_College/Reglementen/vrijstelling_Engels.pdf”>Form Exemption</a></li>
<li><a href=”https://static.studiegids.tue.nl/fileadmin/content/Faculteit_WenI/Bachelor_College/Reglementen/vrijstelling_Engels_homologation.pdf”>Request for Exemption pre-Master</a></li>
<li><a href=”https://static.studiegids.tue.nl/fileadmin/content/Faculteit_WenI/Bachelor_College/Reglementen/confidential.doc”>Confidential Report Form</a></li>
</u>
 ' AND type = 'bachelor' LIMIT 1), 'regulations page'),

  (@ss_id, (SELECT id FROM pages WHERE slug = '<h2>Subsequent Masters</h2>
<p>In this overview, we describe the admission criteria for enrollment in a number of relevant MSc-programs as we know them right now. Please visit the MSc-websites and/or contact the MSc-programs directly in case you have further questions.</p>

<h3>Master Business Information Systems</h3>
<p>Software Science students have direct access, regardless of their specialisation.</p>

<h3>Master Computer Science and Engineering</h3>
<p>This incorporates the specialist Information Security Technology track and the Data Science in Engineering track.</p>
<p>Software Science students have direct access, regardless of their specialisation.</p>

<h3>Master Embedded Systems</h3>
<p>Software Science students have direct access, regardless of their specialisation.</p>


<h3>European ICT Innovation program</h3>
<p>Next to that, The Eindhoven University of Technology offers three tracks in the context of the European ICT Innovation program:</p>
<ul>
<li>Data Science (EIT-DS)</li>
<li>Service Design and Engineering (EIT-SDE)</li>
<li>Embedded Systems (EIT-ES)</li>
</ul>
<p>Those graduates that opt for a computer science teaching career in secondary education should consider to proceed in the Science Education and Communication (SEC) Master program. This program is conducted in Dutch only.</p>
<p>A double degree program is also offered for SEC in combination with BIS and with CSE; these double degree programs amount up to 150 ECTS.</p>
<p>For information about other Master programs into which you might progress, see <a href=”http://www.doorstroommatrix.nl/”>www.doorstroommatrix.nl</a>.</p>
' AND type = 'bachelor' LIMIT 1), 'subsequent masters page');

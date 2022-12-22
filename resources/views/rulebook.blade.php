@extends('layouts.app')

@section('content')

<div class="content bg-grad vh-100 pb-3">
    <div class="h-25">
        <h1 class="lh-1">ISA RULEBOOK & CONTEST ADMINISTRATION MANUAL</h1>
        <h2>April 2022</h2>
    </div>
    <div class="h-75 rulebook section container-md d-flex">

        <div id="list-isa" class="side-panel col-4" style="text-align: initial">
            <div class="list-group overflow-scroll h-100">
                <a href="#list-item-1" class="list-group-item list-group-item-action">CHAPTER 1: ISA Introduction and Operations</a>
                <a href="#list-item-2" class="list-group-item list-group-item-action">I. About the ISA 4</a>
                <a href="#list-item-3" class="list-group-item list-group-item-action">II. ISA Membership Categories  4</a>
                <a href="#list-item-4" class="list-group-item list-group-item-action">III. ISA Participating vs. Non-Participating Members 4</a>
                <a href="#list-item-5" class="list-group-item list-group-item-action">IV. ISA Membership Sub Categories 5</a>
                <a href="#list-item-6" class="list-group-item list-group-item-action">V. ISA Recognized Continental Associations 5</a>
                <a href="#list-item-7" class="list-group-item list-group-item-action">VI. ISA Recognized Organizations 5</a>
                <a href="#list-item-8" class="list-group-item list-group-item-action">VII. Application for ISA Membership 5</a>
                <a href="#list-item-9" class="list-group-item list-group-item-action">VIII. ISA Member Nations (106) 6</a>
                <a href="#list-item-10" class="list-group-item list-group-item-action">IX. ISA Associate Member Nations (4) 6</a>
                <a href="#list-item-11" class="list-group-item list-group-item-action">X. ISA Recognized Continental Associations 6</a>
                <a href="#list-item-12" class="list-group-item list-group-item-action">XI. ISA Recognized Surfing Organizations 6</a>
                <a href="#list-item-13" class="list-group-item list-group-item-action">XII. ISA Member Obligations 6</a>
                <a href="#list-item-14" class="list-group-item list-group-item-action">XIII. ISA Recognized Continental Association Obligations 6</a>
                <a href="#list-item-15" class="list-group-item list-group-item-action">XIV. ISA Championships or Sanctioned Events and Frequency 7</a>
                <a href="#list-item-16" class="list-group-item list-group-item-action">XV. Bids to host ISA events 7</a>
                <a href="#list-item-17" class="list-group-item list-group-item-action">CHAPTER 2: ISA EVENT ADMINISTRATION</a>
                <a href="#list-item-18" class="list-group-item list-group-item-action">I. Section 1: Eligibility 7</a>
                <a href="#list-item-19" class="list-group-item list-group-item-action">A. International Age Categories for Events 7</a>
                <a href="#list-item-20" class="list-group-item list-group-item-action">B. Olympic Games 8</a>
                <a href="#list-item-21" class="list-group-item list-group-item-action">C. Representation 8</a>
                <a href="#list-item-22" class="list-group-item list-group-item-action">II. Section 2: Event Registration Policy and Procedures 9</a>
                <a href="#list-item-23" class="list-group-item list-group-item-action">A. Fee Structure 9</a>
                <a href="#list-item-24" class="list-group-item list-group-item-action">B. Registration / Entry Process & Team Lists 9</a>
                <a href="#list-item-25" class="list-group-item list-group-item-action">C. Official ISA Event Protocol 10</a>
                <a href="#list-item-26" class="list-group-item list-group-item-action">D. Official Language and Translators 11</a>
                <a href="#list-item-27" class="list-group-item list-group-item-action">III. Section 3: Contest Rules and Procedures 11</a>
                <a href="#list-item-28" class="list-group-item list-group-item-action">A. General 11</a>
                <a href="#list-item-29" class="list-group-item list-group-item-action">i. Rules of Competition: Coverage and Authority 11</a>
                <a href="#list-item-30" class="list-group-item list-group-item-action">ii. Format of Events 11</a>
                <a href="#list-item-31" class="list-group-item list-group-item-action">iii. ISA Event Code of Conduct 12</a>
                <a href="#list-item-32" class="list-group-item list-group-item-action">iv. ISA Code of Ethics. 12</a>
                <a href="#list-item-33" class="list-group-item list-group-item-action">v. ISA Code on the Prevention of the Manipulation of Competitions 12</a>
                <a href="#list-item-34" class="list-group-item list-group-item-action">vi. ISA Discipline Policy 13</a>
                <a href="#list-item-35" class="list-group-item list-group-item-action">a. Misbehavior 13</a>
                <a href="#list-item-36" class="list-group-item list-group-item-action">b. Judging Discipline 13</a>
                <a href="#list-item-37" class="list-group-item list-group-item-action">c. ISA Penalties & Infringements 13</a>
                <a href="#list-item-38" class="list-group-item list-group-item-action">d. Disqualification 15</a>
                <a href="#list-item-39" class="list-group-item list-group-item-action">e. Anti-Doping 15</a>
                <a href="#list-item-40" class="list-group-item list-group-item-action">f. ISA Dispute Settlement 16</a>
                <a href="#list-item-41" class="list-group-item list-group-item-action">B. Event Officials: Job Description and Selection  17</a>
                <a href="#list-item-42" class="list-group-item list-group-item-action">i. Technical Director  17</a>
                <a href="#list-item-43" class="list-group-item list-group-item-action">ii. Contest Director 17</a>
                <a href="#list-item-44" class="list-group-item list-group-item-action">iii. Jury of Appeal 17</a>
                <a href="#list-item-45" class="list-group-item list-group-item-action">iv. Head Judge[s] 17</a>
                <a href="#list-item-46" class="list-group-item list-group-item-action">v. Judges  17</a>
                <a href="#list-item-47" class="list-group-item list-group-item-action">vi. Tabulator 18</a>
                <a href="#list-item-48" class="list-group-item list-group-item-action">vii. Media Director 19</a>
                <a href="#list-item-49" class="list-group-item list-group-item-action">viii. Beach Announcer[s] 20</a>
                <a href="#list-item-50" class="list-group-item list-group-item-action">ix. Beach Marshal[s] 20</a>
                <a href="#list-item-51" class="list-group-item list-group-item-action">x. Scoring Computer Operator 20</a>
                <a href="#list-item-52" class="list-group-item list-group-item-action">xi. Timers, Disk Operators, Spotters 20</a>
                <a href="#list-item-53" class="list-group-item list-group-item-action">xii. Security 20</a>
                <a href="#list-item-54" class="list-group-item list-group-item-action active">C. ISA Championship Event Administration. 20</a>
                <a href="#list-item-55" class="list-group-item list-group-item-action">i. Team Composition Changes. 20</a>
                <a href="#list-item-56" class="list-group-item list-group-item-action">ii. Medal Allocations. 20</a>
                <a href="#list-item-57" class="list-group-item list-group-item-action">iii. Jury of Appeal 17</a>
                <a href="#list-item-58" class="list-group-item list-group-item-action">iii. ISA WSG 21</a>
                <a href="#list-item-59" class="list-group-item list-group-item-action">vi. ISA WSUPPC 21</a>
                <a href="#list-item-60" class="list-group-item list-group-item-action">vii. ISA WLSC 22</a>
                <a href="#list-item-61" class="list-group-item list-group-item-action">viii. ISA World Para Surfing Championship 23</a>
                <a href="#list-item-62" class="list-group-item list-group-item-action">ix. ISA Aloha Cup 23</a>
                <a href="#list-item-63" class="list-group-item list-group-item-action">x. ISA WORLD BODYBOARD CHAMPIONSHIP 24</a>
                <a href="#list-item-64" class="list-group-item list-group-item-action">xi. ISA WORLD TANDEM CHAMPIONSHIP  24</a>
                <a href="#list-item-65" class="list-group-item list-group-item-action">xii. ISA WORLD KNEEBOARD CHAMPIONSHIP  24</a>
                <a href="#list-item-66" class="list-group-item list-group-item-action active">D. Competition Rules 25</a>
                <a href="#list-item-67" class="list-group-item list-group-item-action">i. Competition Clothing and Equipment  25</a>
                <a href="#list-item-68" class="list-group-item list-group-item-action">ii. Equipment specifications  25</a>
                <a href="#list-item-69" class="list-group-item list-group-item-action">iii. Timing & Wavecounts 26</a>
                <a href="#list-item-70" class="list-group-item list-group-item-action">iv. Contestable Surf Conditions 27</a>
                <a href="#list-item-71" class="list-group-item list-group-item-action">v. Start of Heat 27</a>
                <a href="#list-item-72" class="list-group-item list-group-item-action">vi. Unauthorised Surfers in Contest Area 28</a>
                <a href="#list-item-73" class="list-group-item list-group-item-action">vii. Buffer Zone[s] 28</a>
                <a href="#list-item-74" class="list-group-item list-group-item-action">viii. Caddies for Competitors 28</a>
                <a href="#list-item-75" class="list-group-item list-group-item-action">ix. Protests. 29</a>
                <a href="#list-item-76" class="list-group-item list-group-item-action">x. Water Photographers 29</a>
                <a href="#list-item-77" class="list-group-item list-group-item-action">xii. Competition Facilities 30</a>
                <a href="#list-item-78" class="list-group-item list-group-item-action">xiii. Event Formats 30</a>
                <a href="#list-item-79" class="list-group-item list-group-item-action">xiv. Interferences 31</a>
                <a href="#list-item-80" class="list-group-item list-group-item-action">xv. Beach Announcer Protocol 32</a>
                <a href="#list-item-81" class="list-group-item list-group-item-action">xvi. Contest Vests & Trunks 32</a>
                <a href="#list-item-82" class="list-group-item list-group-item-action">xvii. Leash / Legrope Policy 32</a>
                <a href="#list-item-83" class="list-group-item list-group-item-action">xviii. Mechanical / Electronic Communication Devices  32</a>
                <a href="#list-item-84" class="list-group-item list-group-item-action">xix. Personal Watercraft (PWC) 32</a>
                <a href="#list-item-85" class="list-group-item list-group-item-action">xx. Surfing Contest Judging 33</a>
                <a href="#list-item-86" class="list-group-item list-group-item-action">a. Introduction: Judging panel protocols and Rosters 33</a>
                <a href="#list-item-87" class="list-group-item list-group-item-action">b. Judging Criteria  34</a>
                <a href="#list-item-88" class="list-group-item list-group-item-action">c. Interference Situations and Rulings 37</a>
                <a href="#list-item-89" class="list-group-item list-group-item-action">d. Judging Evaluation and hints 45</a>
                <a href="#list-item-90" class="list-group-item list-group-item-action">xxi. SUP and Paddleboard Racing Rules. 46</a>
                <a href="#list-item-91" class="list-group-item list-group-item-action">a. Equipment Specifications  46</a>
                <a href="#list-item-92" class="list-group-item list-group-item-action">b. Race Disciplines [types]  46</a>
                <a href="#list-item-93" class="list-group-item list-group-item-action">c. General Racing Rules – (SUP) and Paddleboard Racing Regulations. 47</a>
                <a href="#list-item-94" class="list-group-item list-group-item-action">CHAPTER 3: ISA CONSTITUTION  51</a>
                <a href="#list-item-95" class="list-group-item list-group-item-action">CHAPTER 4: WORLD TEAM AND INDIVIDUAL CHAMPIONS 51</a>
                <a href="#list-item-96" class="list-group-item list-group-item-action">CHAPTER 5: ISA LIFE MEMBERS AND MEMBER EMERITUS 64</a>
            </div>
        </div>   
        
        <div class="col-8 text-start">
            <div data-bs-spy="scroll" data-bs-target="#list-isa" data-bs-smooth-scroll="true" class="bg-white scrollspy-example overflow-scroll p-2 h-100" tabindex="0">
                <h4 id="list-item-1">CHAPTER 1: ISA Introduction and Operations</h4>
                <h4 id="list-item-2">I. About the ISA</h4>
                <h5>Recognized by the International Olympic Committee (IOC), the International Surfing Association (ISA) is the World
                    Governing Body for Surfing and all related activities, as defined by the ISA Constitution. It was originally founded as
                    the International Surfing Federation in 1964 and has been running Open Division World Championships since 1964
                    (World Surfing Games), Junior World Championships since 1980, Masters World Championships since 2007, World
                    Bodyboard Championships since 2011, World StandUp Paddle (SUP) and Paddleboard Championships since 2012
                    and World Para Surfing Championships since 2015. The ISA also sanctions the World Kneeboard Titles and the
                    Tandem Surfing World Title.</h5>
                <h5>Under the ISA’s leadership and authority, surfing was first included in the Olympic Program for the Tokyo 2020
                    Olympic Games in August 2016. Surfing has subsequently been confirmed in the Program for Paris 2024 Olympic
                    Games and the Los Angeles 2028 Olympic Games.</h5>
                <h5>ISA membership includes the surfing National Federations of 110 countries and territories on five continents. Its
                    headquarters are located in San Diego, California. It is presided over by Fernando Aguerre (ARG), first elected
                    President in 1994 in Rio de Janeiro and re-elected every four years ever since. The ISA Executive Committee
                    includes four Vice-Presidents Kirsty Coventry (ZIM), Barbara Kendall (NZL), Karín Sierralta (PER), and Casper
                    Steinfath (DEN), Athletes’ Commission Chair Jusine Dupont (FRA), Regular Members Kimifumi Imoto (JPN) and
                    Jean Luc Arassus (FRA) and ISA Executive Director Robert Fasulo as Ex-officio Member.</h5>
                <h5>
                    The ISA is a member of the Association of Summer Olympic International Federations (ASOIF), the Association of
                    IOC Recognized International Sports Federations (ARISF), the Global Association of International Sports
                    Federations (GAISF), and the International World Games Association, (IWGA).</h5>
                <h5>
                    The ISA is also a signatory to the World Anti-Doping Agency Code, as listed here: https://www.wada-
                    ama.org/en/what-we-do/the-code/code-signatories</h5>
                <h4 id="list-item-3">II. ISA Membership Categories</h4>
                <h5>A. APPLYING MEMBER - An Applying Member has submitted all required application material to the ISA and
                    has had their application approved by the ISA Executive Committee (EC). All Applying Members are subject
                    to ratification as such at an Annual General Meeting (AGM). An Applying Member may have the right to
                    participate in ISA events, receive ISA communications, have access to ISA programs, and may attend ISA
                    meetings but shall not have the right to vote. An Applying Member will remain as such until all requirements
                    of a Provisional Member are met. If all requirements have been completed and submitted to the ISA 30 days
                    prior to an AGM, the Applying Member may be included in the meeting’s agenda for vote to upgrade to
                    Provisional Member status.</h5>
                <h5>B. PROVISIONAL MEMBER - An approved Provisional Member may have the right to vote at ISA meetings,
                    may participate in ISA events, receive ISA communications and have access to ISA programs. A Provisional
                    Member will remain as such until all requirements of a Full Member are met. If all requirements have been
                    completed and submitted to the ISA 30 days prior to an ISA AGM, the Provisional Member may be included
                    in the meeting’s agenda for vote to upgrade to Full Member status.</h5>
                <h5>C. FULL MEMBER - Once voted at an ISA AGM, a Full Member receives full recognition by the ISA. A Full
                    Member shall continue to pay its annual fees, submit yearly activity reports, maintain communication with the
                    ISA and abide by the ISA Constitution and Rulebook in order to maintain its status.</h5>
                <h4 id="list-item-4">III. ISA Participating vs. Non-Participating Members</h4>
                <h5>A new member shall elect to begin its ISA membership as a Participating or Non-Participating Member. If choosing
                    to begin membership as a Non-Participating Member, a member may remain this way as long as it so desires, but
                    cannot go back to being a Non-Participating Member once having been upgraded to the Participating Member
                    status. Once an ISA member elects to be a Participating Member, its membership remains unchanged.</h5>
                <h5>A. DEFINITION OF A PARTICIPATING MEMBER - A Participating Member will have the opportunity to
                    participate in any ISA event, be listed as the ISA member for its country, be included in all ISA
                    communications and have access to ISA programs. The Participating Member annual fee is $500 (USD) or
                    $1000 (USD) dependent upon its overall ranking of all ISA World Championships participated in from the
                    prior year. Participating Members ranked #17 and below in overall ranking pay the annual fee of $500
                    (USD), as do Participating Members who have not participated during the previous year</h5>
                <h5>B. DEFINITION OF A NON-PARTICIPATING MEMBER - A Non-Participating Member will be listed as the ISA
                    member for its country, be included in all ISA communications, and have access to ISA programs. Non-
                    Participating Membership status does not grant the ISA member the right to participate in any ISA Event.
                    The Non-Participating Member fee is $50 (USD) per year.</h5>
                <h4 id="list-item-5">IV.ISA Membership Sub Categories</h4>
                <h5>A. ASSOCIATE MEMBER - The ISA may provide Associate Membership to national organizations seeking
                    membership from the ISA for territories without representation of a National Olympic Committee (NOC) so
                    long as the territory has national teams participating in other IF events recognized by the IOC. An Associate
                    Member qualifies for Applying, Provisional and Full Membership status under the same application
                    requirements as an ISA Member as per the ISA Constitution. Hence, it will be listed as the ISA member for
                    its territory, have the right to participate in ISA events, be included in all ISA communications, have access to
                    ISA programs but it may not vote on ISA matters at ISA Annual General Meetings (AGM).</h5>
                <h5>i. Hawaii and Tahiti, who represent territories without NOCs, have been accepted at the AGM
                    as Full Voting Members of the ISA. Both members are subject to Chapter 2, section C, point
                    E for participation in ISA Events serving as official Qualifying Events for the Olympic Games</h5>
                <h4 id="list-item-6">V. ISA Recognized Continental Associations</h4>
                <h5>The ISA may recognize one Continental Surfing Association for each of the following five areas: Africa, The Americas,
                    Asia, Europe, and Oceania. The Constitution and By-Laws of a Recognized Continental Association must, as a
                    requirement for recognition, fully comply with the ISA Constitution and Rulebook. ISA Continental Associations may
                    organize competitions in accordance with ISA Rules and shall have as one of their main objectives to collaborate with
                    the ISA for the development of surfing and related activities in their region. Such Continental Associations may only
                    include as full voting members, ISA Member Federations in good standing within the region. Non-ISA Member
                    Federations can be affiliated to a Continental Association but may not be considered as a full voting member until
                    they are recognized and in good standing with ISA. The process and complete criteria for recognition of Continental
                    Associations shall be determined by the ISA Executive Committee.</h5>
                <h4 id="list-item-7">VI. ISA Recognized Organizations</h4>
                <h5>The ISA may formally recognize certain surfing-related Organizations seeking affiliation from the ISA. An ISA
                    Recognized Organization has the right to publicize its status and has access to ISA communications and
                    programs. An ISA Recognized Organization may attend ISA Annual General Meetings or events and shall be entitled
                    to speak, but shall not be entitled to vote. An ISA Recognized Organization may be required to pay an annual fee,
                    the amount of which shall be established by the ISA Executive Committee.</h5>
                <h4 id="list-item-8">VII. Application for ISA Membership</h4>
                <h5>The ISA Management shall define the technical process for application for ISA Membership with the approval of the
                    ISA President and Executive Committee. Such process may be updated from time to time. The current application
                    process can be found on http://www.isasurf.org/membership/become-a-member/.</h5>
                <h4 id="list-item-9">VIII. ISA Member Nations (106)</h4>
                <div>
                    <h5>Afghanistan
                        Algeria
                        American Samoa
                        Angola
                        Argentina
                        Aruba
                        Australia
                        Austria
                        Bahamas
                        Bangladesh
                        Barbados
                        Belgium
                        Brazil
                        Bulgaria
                        Canada
                        Cape Verde Islands
                        Cayman Islands
                        Chile
                        China
                        Chinese Taipei/Taiwan
                        Colombia
                        Cook Islands
                        Costa Rica
                        Czech Republic
                        Denmark
                        Dominican Republic
                        Dubai (UAE)
                        El Salvador
                        Ecuador
                        Fiji
                        Finland
                        France
                        Germany
                        Ghana
                        Great Britain
                        Greece
                        Guam
                        Guatemala
                        Haiti
                        Hawaii
                        Hong Kong
                        Hungary
                        India
                        Indonesia
                        Iran
                        Ireland
                        Israel
                        Italy
                        Ivory Coast
                        Jamaica
                        Japan
                        Kiribati
                        Korea
                        Latvia
                        Lebanon
                        Liberia
                        Lithuania
                        Madagascar
                        Malaysia
                        Maldives
                        Mexico
                        Mongolia
                        Morocco
                        Myanmar
                        Namibia
                        Nauru
                        Nepal
                        Netherlands
                        New Zealand
                        Nicaragua
                        Nigeria
                        Norway
                        Oman
                        Panama
                        Papua New Guinea
                        Peru
                        Philippines
                        Poland
                        Portugal
                        Puerto Rico
                        Russia
                        Samoa
                        São Tomé e Príncipe
                        Saudi Arabia
                        Senegal
                        Sierra Leone
                        Singapore
                        Slovakia
                        Slovenia
                        Somalia
                        South Africa
                        Spain
                        Sri Lanka
                        Sweden
                        Switzerland
                        Tahiti
                        Thailand
                        The Gambia
                        Trinidad & Tobago
                        Turkey
                        Ukraine
                        United States of America
                        U.S. Virgin Islands
                        Uruguay
                        Vanuatu
                        Venezuela
                    </h5>
                </div>
                <h4 id="list-item-10">IX. ISA Associate Member Nations (4)</h4>
                <h5>Channel Islands
                    England
                    Scotland
                    Wales</h5>
                <h4 id="list-item-11">X. ISA Recognized Continental Associations</h4>
                <h5>Asia - Asian Surfing Federation
                Europe - European Surfing Federation, ESF
                Oceania – Oceanis Surfing Federation
                America - Pan-American Surf Association, PASA </h5>
                <h4>XI. ISA Recognized Surfing Organizations</h4>
                <h5>World Surf League, WSL
                    Association of Paddlesurf Professionals, APP
                    ALAS Latin Tour</h5>
    </div>
</div>

@endsection

@section('meta')
    
    <title>Banglentė - banglenčių sporto - ISA Rulebook</title>
    <link rel="canonical" href="https://www.banglente.com/rulebook/">
    <meta name="description" content="Banglenčių sporto taisyklių 'rulebook'">
    <meta name="keywords" content="banglenčių nuoma, irklenčių nuoma, bodyboardai, surfboard rental, hidrokostiumų nuoma, wetsuits rental, rent surf, hidrokostiumai, riedlentės, nuoma, klaipeda, surfer">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/carousel.js"></script>

@endsection
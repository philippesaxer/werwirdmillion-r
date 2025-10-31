<?php //31.10.2025 Philippe Saxer. It is a „Wer wird Millionär?“ with PHP. The PHP code is written by me, Philippe Saxer. It is made with lots of Arrays.

$counter = 0;//Counter starting at 0
$question = array( //Questions in a Array
"Frage 1. Als das Ölbild vollendet war, fehlte eigentlich nur noch ...?",
"Frage 2.Was muss der Kunde beim Onlineshopping auf jeden Fall tun, um die gewünschte Ware zu erhalten?",
"Frage 3. Wer trotz drohender Gefahr immer noch alles ganz locker nimmt, ist vielleicht ein wenig ...?",
"Frage 4.Was unabänderlich ist, daran gibt es einer verbreiteten Redensart zufolge nichts zu ...?",
"Frage 5.Wer einen Spieler des NFL-Footballteams aus Dallas heiraten möchte, wird wohl am ehesten von sich behaupten: „Ich will ...“?",
"Frage 6. Was trägt Frau – obwohl der Name ursprünglich so viel wie „kleiner Mantel“ bedeutet – eher drunter als drüber?",
"Frage 7.Über welchen lukrativen „Titel“ konnten sich 2024 mindestens 25 Städte freuen, darunter Chemnitz, Pforzheim und Flensburg?",
"Frage 8. Vier von der Militärpolizei gejagte Männer, die Menschen in Not helfen – das ist ...?",
"Frage 9.Eine anlässlich des 150. Geburtstags verfasste Biografie über welchen Mann landete 2025 auf Platz 1 der Bestsellerliste?",
"Frage 10. Neu eingerichtet wurde das Bundesministerium „für Digitales und ...“?",
"Frage 11. Wer hat nie bei einer Fußballweltmeisterschaft die Rote Karte gesehen?",
"Frage 12. Die sogenannten Börteboote sind ein Wahrzeichen welcher Insel?",
"Frage 13. Bei der Einteilung von Reis in seine drei Grundtypen unterscheidet man häufig zwischen Langkorn-, Rundkorn- und ...?",
"Frage 14. Worum geht es in der Regel, wenn von „birkenstammfarbig“ die Rede ist?",
"Frage 15. Jemanden, der Krüge und Töpfe aus Ton herstellt, nannte man im Kannenbäckerland früher ...?",
);

$answer = array( //Answers in a Array
"\nA: ein Rahmen\nB: auf Hängen\nC: vor Zeichnen\nD: aus Malen\n",
"\nA: Rabattcode resignieren\nB: Bestellung aufgeben\nC: Warenkorb kapitulieren\nD: Zahlung in den Sack hauen\n",
"\nA: frei gegeben\nB: genehmigt\nC: erlaubt\nD: zugelassen\n",
"\nA: schütteln\nB: rütteln\nC: rappeln\nD: wackeln\n",
"\nA: keine Schokolade\nB: doch nur spielen\nC: `nen Cowboy als Mann\nD: zurück nach Westerland\n",
"\nA: Blazer\nB: Petticoat\nC: Sakko\nD: Overall\n",
"\nA: Schnee-Könige\nB: Blitzer-Millionäre\nC: Donner-Götter\nD: Sieger durch Niederschlag\n",
"\nA: das A-Team\nB: der Denver-Clan\nC: eine schrecklich nette Familie\nD: Disneys Gummibärenbande\n",
"\nA: Hans\nB: Michael\nC: Günter\nD: Thomas\n",
"\nA: Landesfortschrittlichkeit\nB: Innovationsgeist\nC: Staatsmodernisierung\nD: Kabinettsverjüngung\n",
"\nA: Zinedine Zidane\nB: Rudi Völler\nC: David Beckham\nD: Sergio Ramos\n",
"\nA: Rügen\nB: Helgoland\nC: Borkum\nD: Fehmarn\n",
"\nA: Randkornreis\nB: Mittelkornreis\nC: Hohlkornreis\nD: Doppelkornreis\n",
"\nA: Rassekaninchen\nB: Massivholzparkett\nC: Tweedmäntel\nD: Edelsteine\n",
"\nA: Meiser\nB: Tauber\nC: Raber\nD: Euler\n",
);

$solution = array(//Solutions zu Answers
"A",
"B",
"D",
"B",
"C",
"B",
"B",
"A",
"D",
"C",
"D",
"B",
"B",
"A",
"D",
);

$joker = array( //Jocker Answers in a Array, One of these two answers is correct
"\nA: ein Rahmen\nD: aus Malen\n",
"\nB: Bestellung aufgeben\nC: Warenkorb kapitulieren\n",
"\nB: genehmigt\nD: zugelassen\n",
"\nA: schütteln\nB: rütteln\n",
"\nC: `nen Cowboy als Mann\nD: zurück nach Westerland\n",
"\nB: Petticoat\nC: Sakko\n",
"\nA: Schnee-Könige\nB: Blitzer-Millionäre\n",
"\nA: das A-Team\nD: Disneys Gummibärenbande\n",
"\nC: Günter\nD: Thomas\n",
"\nB: Innovationsgeist\nC: Staatsmodernisierung\n",
"\nB: Rudi Völler\nD: Sergio Ramos\n",
"\nA: Rügen\nB: Helgoland\nC: Borkum\nD: Fehmarn\n",
"\nB: Mittelkornreis\nC: Hohlkornreis\n",
"\nA: Rassekaninchen\nB: Massivholzparkett\n",
"\nC: Raber\nD: Euler\n",
);

$money = array(//Money when you get it right.
  "50",
  "100",
  "200",
  "300",
  "500",
  "1000",
  "2000",
  "4000",
  "8000",
  "16000",
  "32000",
  "64000",
  "125000",
  "500000",
  "1000000",

);

$jokerunused = true; //set Jockerunused to True


echo "Willkommen zur Quizshow, „Wer wird Millionär?“";//Show text
echo "\nSie haben, während dem ganzen Spiel einen 50-50 Joker den sie verwenden können.";//Show text

foreach ($question as $value1) {//loops the game
  $continue = readline("\nMöchten sie Weiterfahren(Ja/Nein)? ");//Do you want to Continue, if Yes Question will be asked.
  $continue = strtoupper($continue);//Make your answer in uppercase letters
  if ($continue == 'JA') { //If you typed in ja you will se the Questions and answers
  printf('%s', $value1); // Show Questions
  printf('%s', $answer[$counter]);// Show Answers
  if ($jokerunused) {
    $want = readline ("Wollen sie ihren 50-50 Joker verwenden?(Ja/Nein) ");//Do you want to use your 50-50 joker, one time use
    $want = strtoupper($want); //make your answer Uppercase
  }
  if ($jokerunused && $want == 'JA') { //If your answer was Ja this will start
      printf('%s', $joker[$counter]);// shows one correct answer and one wrong answer
      $jokerunused = false; //Set jockerunused to false
      }

    $text = readline("Geben sie ihre Antwort ein: "); // Type in Answers
    $text = strtoupper($text); // Make the Answer Uppercase
    if ($text == $solution[$counter]) {
      echo "Ihre Antwort ist korrekt!"; //If your answer is correct show following text
      printf("Sie haben bis jetzt $money[$counter] Fr. Gewonnen! ");// Show the money you have earned
      $counter++;// add +1 to the counter
     if ($counter == 15) {//if counter is 15(the end)
        printf("Gratuliere Sie sind jetzt Millionär!");//show text
        exit();//exit
    }

    } elseif ($text != $solution[$counter]) {
      echo "Ihre Antwort ist falsch!"; //If your answer is wrong show following text
      if ($counter < 5 ) { //If counter is less then 5
      printf("Sie haben 0 Fr. Gewonnen! "); //show text
      } elseif ($counter < 10) {//If counter is less then 5
      printf("Sie haben 500 Fr. Gewonnen! "); //show text
      } else {//else if counter is less then 15
      printf("Sie haben 16000 Fr. Gewonnen! ");//show text
      }
      exit();//exit the game
}
} else {
  printf("Sie haben $money[$counter] Fr. Gewonnen! ");// If you choose to not continue
  exit(); //exit the game
}

}

?>

# PHP - Podstawy PHP - Przesyłanie danych 

## Ćwiczenia do zrobienia z wykładowcą

### Ćwiczenie 1
Napisz stronę, która wczyta ze zmiennej superglobalnej dwie zmienne ```$start``` i ```$end``` (dla uproszczenia załóźmy że będziemy przesyłać tylko liczby całkowite). Następnie wypisze wszaystkie liczby od ```$start``` do ```$end```. Jeżeli zmienne nie są przesłane to wypisz odpowiednią informację na ten temat.
Następnie na drugiej stronie stwórz kilka linków w html do pierwszej strony przesyłając informację za pomocą GET.

### Ćwiczenie 2
Na stronie napisz formularz, który będzie przyjmował imię i nazwisko. Formularz ten ma przekierowywać do tej samej strony metodą POST.
Jeżeli strona została uruchomiona przez zapytanie POST (musicie sprawdzić to w superglobalnej zmiennej ```$_SERVER['REQUEST_METHOD']```) to ponad formularzem ma się wyświetlić napis "Witaj <podane imie> <podane nazwisko>" 

### Ćwiczenie 3
W zadaniu stwórz 3 strony. Strony mają mieć nastepującą funkcjonalność:
* Pierwsza strona ma nastawiać informacje w sesji pod kluczem ```counter``` na 0,
* Druga strona ma wyświetlać zawartość sesji pod kluczem ```counter``` i zwiększać ją o 1. Jeżeli nie ma takich danych w sesji to powinna wyświetlić odpowiednie informacje.
* Trzecia strona powinna kasować dane z sesji (tylko te trzymane pod kluczem ```counter```).

### Ćwiczenie 4
W tym zadaniu stwórz 3 strony:
* Pierwsza strona ma nastawiać ciasteczko o nazwie ```User``` na twoje imię,
* Druga strona ma wyświetlać zawartość ciasteczka ```User```. Jeżeli nie ma takiego ciasteczka to powinna wyświetlić odpowiednie informacje.
* Trzecia strona powinna kasować ciasteczko o nazwie ```User```.

## Ćwiczenia do pracy samodzielnej
### Ćwiczenie 5
W tym zadaniu dopisz funkcjonalnośc do 2 stron:
* Pierwsza strona (multi.php) ma pobierać 2 zmienne z GET o nazwach ```width``` i ```height``` (jeżeli informacje nie są przesłane to ```width = 5``` i ```height =10```), a następnie wygeneruje tabliczkę mnożenia o podanej wysokości i szerokości (podobną jak w zadaniu z pętli które robiliście pierwszego dnia),
* Na drugiej stronie (index.php) stwórz kilka linków do pierwszej strony przesyłając informację za pomocą GET.

### Ćwiczenie 6
Na stronie napisz formularz który będzie zawietał jedno pole tekstowe i jeden checkbox. Formularz ten ma przekierowywać do tej samej strony metodą POST.
Skrypt ma sprawdzać czy wpisany przez użytkownika tekst zawiera wulgaryzmy – jeżeli tak, powinien zastąpić je dowolnymi znakami (np. frazę „cholera, znowu to PHP“ powinien zastąpić frazą „*******, znowu to PHP“).
Jeżli użytkownik zaznaczy checkboxa „Jestem świadomy konsekwencji“ skrypt nie dokona sprawdzenia wulgaryzmów.
Tekst wpisany przez użytkownika powinien być wyświetlany (w formie ocenzurowanej lub nie) pod formularzem.

Dodatkowo postaraj się, aby liczba gwiazdek odpowiadała liczbie znaków w cenzurowanym słowie.

### Ćwiczenie 7
Napisz skrypt przeliczający waluty:
* EUR → USD
* USD → EUR
* EUR → PLN
* PLN → EUR
* USD → PLN
* PLN → USD
Skrypt powinien wyświetlać formularz zawierający pole do wpisania kwoty, pola typu radio do wybrania z jakiej i na jaką walutę przeliczamy oraz przycisk „Przelicz“.
Przeliczona kwota powinna pokazać się ponad formularzem.

### Ćwiczenie 8
Napisz skrypt, który na podstawie podanych ocen (formularz ocen z przedmiotów) będzie liczył ich średną arytmetyczną. Oceny trzymaj w tablicy którą będziesz wkładać do sesji. Zadbaj o
walidację wprowadzanych ocen (nie mniejsza niż 2 i nie większa niż 5). 
Pamiętaj żeby sprawdzać czy tablica z ocenami istnieje w sesji - jeżeli nie to ją stwórz.
Wszystkie oceny jakie są zapamiętane i ich średnia powinny być wyświetlane pod formularzem. 
Do trzymania tablicy w ciasteczku użyj funkcje ```serialize```, a do wczytania ```unserialize```.

### Ćwiczenie 9
W tym zadaniu stwórz 2 strony:
* Na pierwszej powinien znajdować się formularz z dwoma polami tekstowymi. Pierwsze pole będzie przybierało nazwe ciasteczka, a drugie jego wartość. Formularz ma przekierowywać do tej samej strony metodą POST.
  Jeżeli na tą stronę wejdziemy metodą POST to ma ono tworzyć nowe ciasteczko o podanej nazwie i wartości.
* Na drugiej stronie wyświetl wszystkie ciasteczka do których masz dostęp. Jak wczytać wszystkie ciasteczka przeczytaj [tutaj][all-cookies]

### Ćwiczenie 10
W tym zadaniu stwórz 2 strony:
* Na stronie wyświetl wszystkie ciasteczka do których masz dostęp. Jak wczytać wszystkie ciasteczka przeczytaj [tutaj][all-cookies]. Przy każdym z nich wygeneruj link do drugiej strony przekazując GET-em nazwę ciasteczka.
* Na drugiej stronie poinformuj o tym że usuwasz ciasteczko i je usuń. Nazwę ciasteczka pobierz z GET.


<!-- Links -->
[all-cookies]:http://stackoverflow.com/questions/9577029/can-i-display-all-the-cookies-i-set-in-php
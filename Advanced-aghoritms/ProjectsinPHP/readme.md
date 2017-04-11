# PHP - Podstawy PHP - Warsztaty

## Warsztat 1 - rozgrzewka
Stwórz statyczną stronę z formularzem, która prosi o imię użytkownika, a po kliknięciu przycisku „wyślij” przekierowuje na podstronę witającą użytkownika słowami „Cześć {$imię}!”

### Wskazówki:
1. Formularz ma przekierowywać na tą samą stronę.
2. Na samym początku sprawdź czy strona została wygenerowana przez zapytanie ```GET``` czy ```POST``` (użyj if i ```$_SERVER['REQUEST_METHOD']```)
3. Sprawdź czy w tablicy POST znajduje się poprawna zmienna.
4. Jeżeli coś nie działa – debuguj!!!

## Warsztat 2 - Symulator Lotto.
Napisz prosty symulator Lotto. Symulator ma się składać z strony z formularzem który pozwoli wybrać 6 liczb z zakresu 1-49. Po wysłaniu formularza strona ma sama wylosować 6 (różnych) liczb z tego samego zakresu, wyświetlić je i pokazać ile liczb z wybranych przez użytkownika pokrywa się z wylosowanymi.

### Wskazówki:
1. Wygeneruj formularz pętlą for i checkboxami.
2. Napisz funkcję która generuje 6 losowych liczb z podanego zakresu. Najprostrzym sposobem generowanie 6 różnych liczb z podanego zakresu jest stworzenie tablicy z liczbami z tego zakresu, następnie przetasowanie jej i wybranie 6 pierwszych liczb znajdujących się w tej tablicy. Funkcje które Ci pomogą: [array_key_exists][array_key_exists], [shuffle][shuffle], [array_slice][array_slice], [range][range].
3. Jeżeli strona jest wygenerowana z post – zobacz czy przesyłaś sobie wszystkie dane. Możesz zrobić to za pomocą ```var_dump($_POST);```,

## Warsztat 2b - Symulator Lotto (rozszerzony).
Rozszerz symulator z poprzedniego zadania. Ma on przyjmować w postaci danych ```GET``` informacje na temat rozpiętości liczb (np. ```?start=5&end=30```) i działać dla podanego przedziału.
Czyli możemy zrobić lotto gdzie liczby są losowane z przedziału 5-30.

## Warsztat 3 - Ostatnie odwiedziny.
Stwórz stronę, która wita gości i mówi im kiedy ostatnio byli na naszej stronie. Daj też możliwość usunięcia ciasteczka (poprzez guzik).

### Wskazówki:
1. Korzystaj z ciasteczek do zapisania danych kiedy user był na stronie.
2. Uzależnij komunikat od istnienia ciasteczka (podczas pierwszych odwiedzin strony wyświetl odpowiedni komunikat).
3. Usuwanie ciasteczka zrób na osobnej stronie. 

## Warsztat 4 - Lista zadań.
Stwórz aplikację która będzie służyć do trzymania prostej listy zadań. Strona ma pokazywać wszystkie zadania do zrobienia, i formularz do dodania zadania.

### Wskazówki:
1. Korzystaj z sesji do trzymania zadań.
2. Zadania trzymaj w tabelce.
3. Jeżeli strona jest generowania przez ```POST``` to dodaj zadanie.
4. Do trzymania zadań w ciasteczku użyj funkcje serialize, a do wczytania unserialize.

<!-- Links -->
[array_key_exists]:https://secure.php.net/manual/en/function.array-key-exists.php
[shuffle]:https://secure.php.net/manual/en/function.shuffle.php
[array_slice]:https://secure.php.net/manual/en/function.array-slice.php
[range]:https://secure.php.net/manual/en/function.range.php
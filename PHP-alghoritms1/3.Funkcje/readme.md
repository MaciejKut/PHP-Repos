# PHP - Podstawy PHP - Funkcje 

## Ćwiczenia do zrobienia z wykładowcą

### Ćwiczenie 1
Napisz funkcję ```rentCost($days)```, która będzie przyjmować liczbę dni jako argument, a następnie wyliczać koszt wynajmu pokoju według podanego wzoru:

- Wynajem trwa 1 dzień - koszt pokoju 200zł/dzień
- Wynajem trwa 2-3 dni - koszt pokoju 180zł/dzień
- Wynajem trwa 4-7 dni - koszt pokoju 160zł/dzień
- Wynajem trwa 8+ dni - koszt pokoju 150zł/dzień.
 
Dodatkowo za każdy pełny tydzień przysługuje 50zł zniżki. 
Przykład:
```
input -> 8
output -> 1150
```
### Ćwiczenie 2
Napisz funkcję ```perfectnumber($n)```, która zwraca ```true```, gdy zadana parametrem liczba całkowita jest liczbą doskonałą, ```false``` w przeciwnym przypadku.
Liczba doskonała to taka, która jest równa sumie swoich dzielników. Przykładami takich liczb są: 
* 1 = 1,
* 6 = 1+2+3.


## Ćwiczenia do pracy samodzielnej

### Ćwiczenie 3
Napisz skrypt, który podaną przez użytkownika kwotę pieniędzy (liczba całkowita) rozmieni na jak najmniejszą ilość monet i banknotów o nominałach 1, 2, 5, 10 złotych.
Przykład: 
* 188 zł Zostanie rozmienione na:
  * 18 banknotów 10 zł
  * 1 moneta 5zł
  * 1 moneta 2zł
  * 1 moneta 1zł

W skrypcie należy zdefiniować funkcję, w której zadana kwota oraz ilości poszczególnych monet są parametrami funkcji (użyj referencji). Funkcja ta powinna wypisywać wynik obliczeń na stronie.

### Ćwiczenie 4
Napisz funkcję ``max2``, która zwraca większą z dwóch podanych jako jej parametry liczb, a następnie funkcję ``max3``, zwracającą największą spośród trzech podanych liczb. 
Funkcja ``max3`` ma do tego celu używać funkcji ``max2``.

## Ćwiczenie 5
Napisz funkcję ```rockPaperScissors(player1, player2)``` która będzie pobierać dwa napisy i zwracać infromacje kto wygrał. 
Poprawne napisy przyjmowane przez funkcjię to: `papier`, `nożyce`, `kamień`.
Funkcja ma zwracać jeden z 4 napisów: "Gracz 1 wygrał", "Gracz 2 wygrał" "Remis" lub "Błędne informacje".

Przykład:

```
input -> "papier", "kamień"
output -> "Gracz 1 wygrał"
```

## Ćwiczenia do zrobienia w domu
Zajrzyj do plików homework1.php aż do homework5.php. Znajdują się tam kawałki kodu i możliwe ich wyniki zapisane w komentarzach. 
Zaznacz która odpowiedź jest poprawna i dopisz dlaczego tak uważasz.
***Postaraj się wybrać którąś odpowiedź zanim uruchomisz plik!***

# PHP - Podstawy PHP - Tablice 

### Ćwiczenie 1
Napsiz funkcję ```printTable($array)``` która w pętli przejdzie po wszystkich elementach tablicy i wypisze je na ekranie.

### Ćwiczenie 2
Napisz dwie funkcje:
* ```print2DTable($table)``` - która wyświetli tablicę dwuwymiarową w postaci macierzy,
* ```getMatrixTrace($array)```, która obliczy ślad macierzy (sumę elementów na głównej przekątnej) przekazanej w parametrze. Zakładamy, że tablica reprezentuje macierz kwadratową (liczba wierszy równa liczbie kolumn)


### Ćwiczenie 3
Napisz funkcję, która wyświetli największą liczbę spośród liczb znajdujących się w tablicy liczb całkowitych.
Funkcja ma przyjmować jeden parametr – tablicę.
Spróbuj rozwiązać to zadanie na 2 różne sposoby.

### Ćwiczenie 4
Napisz funkcję, która wyświetli te liczby w tablicy, które są mniejsze od średniej arytmetycznej wszystkich liczb w tablicy.

### Ćwiczenie 5
Napisz funkcję, która sprawdza, czy zmienna przekazana jako pierwszy parametr występuje w tablicy przekazanej jako drugi parametr. 
Jeżeli tak, funkcja powinna zwrócić logiczną prawdę (```true```) a jeżeli nie to fałsz (```false```).

### Ćwiczenie 6
Napisz funkcję ```createMultiTable($n)```. Funkcja ta przyjmuje liczbę całkowitą. Funkcja ta ma zwrócić dwuwymiarową tablicę, która w obu wymiarach ma podaną wielkość (tablicę możesz wypełnić kolejnymi liczbami całkowitymi).

## Ćwiczenia do zrobienia w domu

### Ćwiczenie 1
Przerób funkcję z ćwiczenia 5 (zadania które trzeba było zrobić podczas zajęć) w taki sposób żeby przyjmowała jeszcze 3 argument. Argument ma być przekazywany przez referencję.
Jeżeli funkcja znajdzie szukany element w tablicy powinna zapisać indeks pod którym wystąpił szukany element w argumencie przekazanym przez referencje.

Zobacz co się zmieni jeżeli przekażesz ten argument nie używając referencji. Postaraj się wyjaśnić dlaczego tak się dzieje.

### Ćwiczenie 2
Zaimplementuj algorytm sortujący tablicę o nazwie [Bubblesort][bubblesort]. Jest to jeden z łatwiejszych algorytmów. Jeżeli chcesz dowiedzieć się wiecej o algorytmach sortujących (jest to dobre ćwiczenie algorytmiki) zajrzyj [tutaj][sorting]

<!-- Links -->
[bubblesort]: http://www.tutorialspoint.com/data_structures_algorithms/bubble_sort_algorithm.htm
[sorting]: http://www.algorytm.org/algorytmy-sortowania/

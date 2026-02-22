# Chess Tournament Results (TYPO3 v13.4)

Diese Extension stellt eine einfache Turnierverwaltung für Schachturniere bereit.

## Funktionen

- Turniere im Backend anlegen
- Spieler als Startrangliste pro Turnier verwalten
- Runden manuell anlegen
- Pro Runde Paarungen und Rundenrangliste (Standings) erfassen
- Frontend-Ansichten:
  - Startrangliste
  - Rundenrangliste
  - Rundenpaarungsliste
  - Endrangliste (letzte erfasste Runde)
- Keine automatische Rundenauslosung
- Feld `source_reference` pro Runde zur Dokumentation einer Importdatei/Quelle

## Installation

1. Extension in `packages/` ablegen oder per Composer einbinden.
2. Extension im TYPO3 Backend aktivieren.
3. Datenbankschema über den Install Tool / Database Analyzer aktualisieren.
4. TypoScript-Template mit statischem Template **Chess Tournament Results** einbinden.
5. Plugin **Chess Tournament Results** auf einer Seite einfügen.

## Hinweise zum Datenimport

Die Rundendaten können manuell gepflegt werden.
Wenn Runden aus externen Dateien kommen, kann die Dateiquelle in `source_reference` dokumentiert werden (z. B. `runde3.csv`).


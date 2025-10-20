<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Flat;
use App\Models\Flat2;
use App\Models\ProductPrice;
use Exception;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    private const CSV_HEADERS = [
        'Nazwa dewelopera',
        'Forma prawna dewelopera',
        'Nr KRS',
        'Nr wpisu do CEiDG',
        'Nr NIP',
        'Nr REGON',
        'Nr telefonu',
        'Adres poczty elektronicznej',
        'Nr faxu',
        'Adres strony internetowej dewelopera',
        'Województwo adresu siedziby/głównego miejsca wykonywania działalności gospodarczej dewelopera',
        'Powiat adresu siedziby/głównego miejsca wykonywania działalności gospodarczej dewelopera ',
        'Gmina adresu siedziby/głównego miejsca wykonywania działalności gospodarczej dewelopera',
        'Miejscowość adresu siedziby/głównego miejsca wykonywania działalności gospodarczej dewelopera',
        'Ulica adresu siedziby/głównego miejsca wykonywania działalności gospodarczej dewelopera',
        'Nr nieruchomości adresu siedziby/głównego miejsca wykonywania działalności gospodarczej dewelopera',
        'Nr lokalu adresu siedziby/głównego miejsca wykonywania działalności gospodarczej dewelopera',
        'Kod pocztowy adresu siedziby/głównego miejsca wykonywania działalności gospodarczej dewelopera',
        'Województwo adresu lokalu, w którym prowadzona jest sprzedaż',
        'Powiat adresu lokalu, w którym prowadzona jest sprzedaż',
        'Gmina adresu lokalu, w którym prowadzona jest sprzedaż',
        'Miejscowość adresu lokalu, w którym prowadzona jest sprzedaż',
        'Ulica adresu lokalu, w którym prowadzona jest sprzedaż',
        'Nr nieruchomości adresu lokalu, w którym prowadzona jest sprzedaż',
        'Nr lokalu adresu lokalu, w którym prowadzona jest sprzedaż',
        'Kod pocztowy adresu lokalu, w którym prowadzona jest sprzedaż',
        'Dodatkowe lokalizacje, w których prowadzona jest sprzedaż',
        'Sposób kontaktu nabywcy z deweloperem',
        'Województwo lokalizacji przedsięwzięcia deweloperskiego lub zadania inwestycyjnego',
        'Powiat lokalizacji przedsięwzięcia deweloperskiego lub zadania inwestycyjnego',
        'Gmina lokalizacji przedsięwzięcia deweloperskiego lub zadania inwestycyjnego',
        'Miejscowość lokalizacji przedsięwzięcia deweloperskiego lub zadania inwestycyjnego',
        'Ulica lokalizacji przedsięwzięcia deweloperskiego lub zadania inwestycyjnego',
        'Nr nieruchomości lokalizacji przedsięwzięcia deweloperskiego lub zadania inwestycyjnego',
        'Kod pocztowy lokalizacji przedsięwzięcia deweloperskiego lub zadania inwestycyjnego',
        'Rodzaj nieruchomości: lokal mieszkalny, dom jednorodzinny ',
        'Nr lokalu lub domu jednorodzinnego nadany przez dewelopera',
        'Cena m 2 powierzchni użytkowej lokalu mieszkalnego / domu jednorodzinnego [zł]',
        'Data od której cena obowiązuje cena m 2 powierzchni użytkowej lokalu mieszkalnego / domu jednorodzinnego',
        'Cena lokalu mieszkalnego lub domu jednorodzinnego będących przedmiotem umowy stanowiąca iloczyn ceny m2 oraz powierzchni [zł]',
        'Data od której cena obowiązuje cena lokalu mieszkalnego lub domu jednorodzinnego będących przedmiotem umowy stanowiąca iloczyn ceny m2 oraz powierzchni',
        'Cena lokalu mieszkalnego lub domu jednorodzinnego uwzględniająca cenę lokalu stanowiącą iloczyn powierzchni oraz metrażu i innych składowych ceny, o których mowa w art. 19a ust. 1 pkt 1), 2) lub 3) [zł]',
        'Data od której obowiązuje cena lokalu mieszkalnego lub domu jednorodzinnego uwzględniająca cenę lokalu stanowiącą iloczyn powierzchni oraz metrażu i innych składowych ceny, o których mowa w art. 19a ust. 1 pkt 1), 2) lub 3)',
        'Rodzaj części nieruchomości będących przedmiotem umowy',
        'Oznaczenie części nieruchomości nadane przez dewelopera',
        'Cena części nieruchomości, będących przedmiotem umowy [zł]',
        'Data od której obowiązuje cena części nieruchomości, będących przedmiotem umowy',
        'Rodzaj pomieszczeń przynależnych, o których mowa w art. 2 ust. 4 ustawy z dnia 24 czerwca 1994 r. o własności lokali',
        'Oznaczenie pomieszczeń przynależnych, o których mowa w art. 2 ust. 4 ustawy z dnia 24 czerwca 1994 r. o własności lokali',
        'Wyszczególnienie cen pomieszczeń przynależnych, o których mowa w art. 2 ust. 4 ustawy z dnia 24 czerwca 1994 r. o własności lokali [zł]',
        'Data od której obowiązuje cena wyszczególnionych pomieszczeń przynależnych, o których mowa w art. 2 ust. 4 ustawy z dnia 24 czerwca 1994 r. o własności lokali',
        'Wyszczególnienie praw niezbędnych do korzystania z lokalu mieszkalnego lub domu jednorodzinnego',
        'Wartość praw niezbędnych do korzystania z lokalu mieszkalnego lub domu jednorodzinnego [zł]',
        'Data od której obowiązuje cena wartości praw niezbędnych do korzystania z lokalu mieszkalnego lub domu jednorodzinnego',
        'Wyszczególnienie rodzajów innych świadczeń pieniężnych, które nabywca zobowiązany jest spełnić na rzecz dewelopera w wykonaniu umowy przenoszącej własność',
        'Wartość innych świadczeń pieniężnych, które nabywca zobowiązany jest spełnić na rzecz dewelopera w wykonaniu umowy przenoszącej własność [zł]',
        'Data od której obowiązuje cena wartości innych świadczeń pieniężnych, które nabywca zobowiązany jest spełnić na rzecz dewelopera w wykonaniu umowy przenoszącej własność',
        'Adres strony internetowej, pod którym dostępny jest prospekt informacyjny'
    ];

    public function export()
    {
        $baseFileName = "PERFECT_JOBS_SPOLKA_Z_OGRANICZONA_ODPOWIEDZIALNOSCIA_CENY_OFERTOWE";
        $date = date('Y-m-d');
        $fileName = $baseFileName . '_' . $date . '.csv';

        $stage1 = Flat::orderBy('created_at')->get();

        $stage1_table = [];

        $mp_price = 20000;
        $kl_price = 5000;
        $mp_date = '2023-10-13 16:00';
        $kl_date = '2023-10-13 16:00';

        try {
            $extra = Extra::where('name', 'Miejsce postojowe')->firstOrFail();
            $mp_price = $extra->price;
            $mp_date = date('Y-m-d H:i', strtotime($extra->created_at));
        } catch (Exception $e) {

        }
        try {
            $extra = Extra::where('name', 'Komórka lokatorska')->firstOrFail();
            $kl_price = $extra->price;
            $kl_date = date('Y-m-d H:i', strtotime($extra->created_at));
        } catch (Exception $e) {

        }
        foreach ($stage1 as $flat) {

            $dateChangePrice = ProductPrice::where('flat_id', $flat->id)->orderByDesc('created_at')->first();
            $datePrice = $dateChangePrice ? $dateChangePrice->created_at : $flat->created_at;
          
            $row_in_table = [
                'Perfect Jobs Spółka z ograniczoną odpowiedzialnością',
                'Spółka z ograniczoną odpowiedzialnością',
                '0000756740',
                'X',
                '4980269203',
                '381757618',
                '503517499',
                'sprzedazdgg@gmail.com',
                'X',
                'https://dggdevelopment.pl',
                'śląskie',
                'piekary śląskie',
                'Piekary Śląskie',
                'Piekary Śląskie',
                'Henryka Sienkiewicza',
                '1',
                'X',
                '41-940',
                'śląskie',
                'piekary śląskie',
                'Piekary Śląskie',
                'Piekary Śląskie',
                'Henryka Sienkiewicza',
                '1',
                'X',
                '41-940',
                'X',
                'E-mail, Telefon',
                'śląskie',
                'Piekary Śląskie',
                'Piekary Śląskie',
                'Piekary Śląskie',
                'Jana Pawła II',
                'X',
                '41-940',
                'Lokal mieszkalny',
                'Etap 1 mieszkanie ' . strval($flat->id),
                strval($flat->price_surface),
                strval(date('Y-m-d H:i', strtotime($datePrice))),
                strval($flat->price),
                strval(date('Y-m-d H:i', strtotime($datePrice))),
                strval($flat->price),
                strval(date('Y-m-d H:i', strtotime($datePrice))),
                'Miejsce postojowe',
                'MP' . strval($flat->id),
                $mp_price,
                $mp_date,
                'Komórka lokatorska',
                'KL' . strval($flat->id),
                $kl_price,
                $kl_date,
                'X',
                'X',
                'X',
                'X',
                'X',
                'X',
                'https://dggdevelopment.pl'
            ];
            $stage1_table[] = $row_in_table;
        }

        $stage2 = Flat2::orderBy('created_at')->get();

        $stage2_table = [];
        foreach ($stage2 as $flat) {

            $dateChangePrice = ProductPrice::where('flat2_id', $flat->id)->orderByDesc('created_at')->first();
            $datePrice = $dateChangePrice ? $dateChangePrice->created_at : $flat->created_at;
           
            $row_in_table = [
                'Perfect Jobs Spółka z ograniczoną odpowiedzialnością',
                'Spółka z ograniczoną odpowiedzialnością',
                '0000756740',
                'X',
                '4980269203',
                '381757618',
                '503517499',
                'sprzedazdgg@gmail.com',
                'X',
                'https://dggdevelopment.pl',
                'śląskie',
                'Piekary Śląskie',
                'Piekary Śląskie',
                'Piekary Śląskie',
                'Henryka Sienkiewicza',
                '1',
                'X',
                '41-940',
                'śląskie',
                'piekary śląskie',
                'Piekary Śląskie',
                'Piekary Śląskie',
                'Henryka Sienkiewicza',
                '1',
                'X',
                '41-940',
                'X',
                'E-mail, Telefon',
                'śląskie',
                'piekary śląskie',
                'Piekary Śląskie',
                'Piekary Śląskie',
                'Jana Pawła II',
                'X',
                '41-940',
                'Lokal mieszkalny',
                'Etap 2 mieszkanie ' . strval($flat->id),
                strval($flat->price_surface),
                strval(date('Y-m-d H:i', strtotime($datePrice))),
                strval($flat->price),
                strval(date('Y-m-d H:i', strtotime($datePrice))),
                strval($flat->price),
                strval(date('Y-m-d H:i', strtotime($datePrice))),
                'Miejsce postojowe',
                'MP' . strval($flat->id),
                $mp_price,
                $mp_date,
                'Komórka lokatorska',
                'KL' . strval($flat->id),
                $kl_price,
                $kl_date,
                'X',
                'X',
                'X',
                'X',
                'X',
                'X',
                'https://dggdevelopment.pl'
            ];
            $stage2_table[] = $row_in_table;
        }

        $data = [
            self::CSV_HEADERS,
            ...$stage1_table,
            ...$stage2_table
        ];

        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $callback = function () use ($data) {
            $file = fopen('php://output', 'w');
            foreach ($data as $row) {
                fputcsv($file, $row, ';');
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}

<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('place');
            $table->string('type');
            $table->longText('content');
            $table->timestamps();
        });

        $setting = new Setting();
        $setting->place = 'logo_w_pasku_nawigacyjnym';
        $setting->type = 'photo';
        $setting->content = 'logo.png';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'facebook_link_w_pasku_nawigacyjnym';
        $setting->type = 'text';
        $setting->content = 'https://www.facebook.com/people/Nowe-Inspiracje/100063527142284/';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'instagram_link_w_pasku_nawigacyjnym';
        $setting->type = 'text';
        $setting->content = '';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_1_karuzela_1_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = 'slider-1.jpeg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_1_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_1_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Nagłówek przykład';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_1_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Paragraf przykład';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'przycisk_1_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Przycisk przykład';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'link_1_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_2_karuzela_1_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = 'slider-2.jpeg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_2_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_2_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Inny nagłówek';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_2_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Inny paragarf';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'przycisk_2_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Inny przycisk';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'link_2_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_3_karuzela_1_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = 'slider-3.jpeg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_3_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_3_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Ostatni nagłówek';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_3_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Ostatni paragraf';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'przycisk_3_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Ostatni przycisk';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'link_3_karuzela_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ciemny_sekcji_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Osiedle Luxor Residence';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_jasny_sekcji_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'LOKALIZACJA Z LOKATĄ NA PRZYSZŁOŚĆ';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_sekcji_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'To najbardziej atrakcyjna i najlepiej zlokalizowana inwestycja apartamentów na rynku pierwotnym w Bielsku-Białej. Otoczona przestrzenią, zielenią pobliskich gór, Szyndzielni, Dębowca, terenami rekreacyjnymi, trasami spacerowymi, rowerowymi do tego w niesamowicie widokowej i malowniczej części miasta. To cicha i zarazem widokowa część prestiżowej dzielnicy Kamienica w otoczeniu malowniczej panoramy gór z dala od gwaru i miejskiego smogu. Główne zalety lokalizacji inwestycji to z pewnością';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_po_lewej_sekcji_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-map-location-dot p-2"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikony_po_lewej_sekcji_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'wygoda';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikony_po_lewej_sekcji_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Doskonała, wręcz idealna lokalizacja umożliwiająca dogodny dojazd do centrum miasta, środków komunikacji miejskiej oraz kompleksów usługowo-handlowych i nie zapominajmy o zielonych terenach na wyciągnięcie ręki.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_po_prawej_sekcji_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-brands fa-pagelines p-2"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikony_po_prawej_sekcji_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'relaks';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikony_po_prawej_sekcji_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Apartamenty są położone w najbardziej zielonej części miasta, pięknej o każdej porze roku, z fantastycznymi widokali, wschodami i zachdami słońca, otaczającą przestrzenią i czystym powietrzem z dala od hałasu, smogu i intensywnej zabudowy.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_sekcji_1_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = 'info-1.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_sekcji_1_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_sekcji_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = 'info-2.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_1_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-bell-slash p-2"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikony_1_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'cisza';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikony_1_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Cisza - to obecnie luksus dla wszystkich. Bliskość natury, otaczającej zieleni, widoków otulonych ciszą i jeszcze w prestiżowej dzielnicy Kamienica ... To Nasze apartamenty w otoczeniu malowniczej panoramy gór z dala od gwaru miejskiego.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_2_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-shield-halved p-2"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikony_2_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'bezpieczeństwo';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikony_2_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Teren pozbawiony uciążliwego ruchu samochodów dający poczucie bezpieczeństwa wszystkim osobom przebywającym w Apartamentach Szyndzielnia. Dodatkowo bardzo wysokie standardy budowy, elemety p.poż i wykończenia zaspokoją oczekiwania i zagwarantują bezpieczeństwo najbardziej wymagającym.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_3_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-key p-2"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikony_3_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'NADCHODZI RYNEK WYNAJMU';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikony_3_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'W dobie obecnej sytuacji gospodarczej jak i polityki kredytowej, rosnących cen i kosztów materiałów, znacznie mniej osób będzie miało możliwość zakupu własnego lokum, dlatego większa część osób będzie zainteresowana i zmuszona do korzystania z wynajmu. Dlatego reagujemy na potrzeby rynku.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_4_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-layer-group p-2"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikony_4_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'NAJBARDZIEJ POSZUKIWANE POWIERZCHNIE';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikony_4_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Do najbardziej poszukiwanych powierzchni w Polsce należą kawalerki jak i dwupokojowe lokale do 45m². To jednocześnie najbardziej opłacalne przestrzenie do wynajmu dlatego od dawna są najbardziej pożądanymi i poszukiwanymi lokalami. Dużo łatwiej się je wykańcza i wynajmuje, chętnie szukają ich: młode, pracujące pary, osoby samotne, single.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_5_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-cash-register p-2"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikony_5_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'odzyskaj vat';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikony_5_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Cena zawiera podatek VAT 23%. Dodatkowo z myślą o inwestycji, wynajmie informujemy, że każda z osób nabywających apartament, niezależnie od tego czy prowadzi działalność gospodarczą czy też nie, jest uprawniona do pełnego odliczenia podatku VAT.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_6_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-wallet p-2"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikony_6_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'najlepsza cena';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikony_6_sekcji_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Cena sprzedaży jest bardzo istotna, gdyż oferty konkurencyjne są bardzo zróżnicowane – a inwestycji w najbliższym czasie będzie znacznie mniej. Nasza oferta prezentuje się najlepiej, gdyż ceny na rynku nieruchomości są uzależnione od jego miejsca - więc wystarczy porównać oferty nieruchomości w bezpośredniej i najbliższej lokalizacji. Najważniejszym kryterium określającym wartość i atrakcyjność nieruchomości to: lokalizacja, lokalizacja, najlepsza lokalizacja – to pozwala odróżnić Nas od innych i to również doceniają Nasi Klienci.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Poznaj lepiej inwestycję osiedle sądowe';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_1_karuzela_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = '1.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_2_karuzela_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = '2.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_3_karuzela_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = '3.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_4_karuzela_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = '4.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_5_karuzela_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = '5.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_6_karuzela_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = '6.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_7_karuzela_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = '7.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_8_karuzela_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = '8.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_9_karuzela_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = '9.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_10_karuzela_2_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = '10.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_1_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_2_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_3_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_4_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_5_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_6_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_7_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_8_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_9_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_10_karuzela_2_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_sekcji_3_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Poznaj nasze wyjątkowe apartamenty';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_sekcji_3_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = 'info-1.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_sekcji_3_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_na_gorze_sekcji_3_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'MAŁY APARTAMENT – DUŻA MOC PERSONALIZACJI WNĘTRZA';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_na_gorze_sekcji_3_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Wszyscy wiemy, że wnętrza w których przebywamy, mają na Nas znacznie większy wpływ niż Nam się wydaje... Kiedy wracasz po pracy bardzo ważne jest aby zrelaksować ciało i umysł w odpowiedni sposób a kolory we wnętrzach mają ogromny wpływ na Nasz nastrój i samopoczucie ... inspirują oraz sprawiają, że nasza przestrzeń życiowa w której codziennie przebywamy nabiera zupełnie indywidualnego stylu i charakteru. To właśnie kolory, które Nas otaczają podnoszą poziom Naszej energii i mają niesamowite znaczenie w życiu. To one częściowo kreują Nasz dzień, wieczór i sen, wpływają na Nasze samopoczucie i usposobienie, bo Nasz nastrój jest przecież inny każdego dnia. Tak projektowane wnętrza mają uspokoić Nasze myśli i ułatwić zasypianie, zapewnić komfort i relaks po czasem ciężkiej pracy. Warto je wprowadzić do wnętrza i życia po to, by uzyskać odprężenie i relaks każdego dnia.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_na_gorze_sekcji_3_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = 'info-1.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_na_gorze_sekcji_3_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_na_dole_sekcji_3_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'DESIGN BEZ GRANIC - ZNAJDŹ SWOJE WNĘTRZE';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_na_dole_sekcji_3_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Możesz indywidualnie wykończyć własne wnętrze, w swoim stylu, w zasięgu własnych możliwości finansowych i zgodnie z własną wizją. Dopasuj je do własnych potrzeb dzisiaj i w przyszłości. Galeria przedstawia przykładowe aranżacje - wnętrz apartamentów przygotowane Naszych projektantów. Jak dobrze podejść do takiego wyzwania? ... Jak urządzić poszczególne wnętrza, by wyglądały one stylowo, a jednocześnie by były one w pełni komfortowe? Wszystkim Naszym Klientom mającym przed sobą to wyzwanie podpowiemy, jak urządzić wygodny apartament, który zachwyci swoim wyglądem. Wybór stylu w jakim urządzony zostanie apartament jest jednak kwestią indywidualną właściciela danego wnętrza i zależną w pełni od jego gustu i upodobań ... Zapraszam do zakładki INWESTYCJA / GALERIA i znajdź swój styl i kolory wnętrza. W przypadku indywidualnych koncepcji - zadzwoń chętnie pomożemy.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_na_dole_sekcji_3_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = 'info-1.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_na_dole_sekcji_3_na_stronie_glownej';
        $setting->type = 'photo';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Luksusowe apartamenty z balkonami pod Szyndzielnią';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_1_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'OSIEDLE SĄDOWA to jedna z najpiękniej położonych inwestycji w Bielsku-Białej otoczonych zielenią pobliskich gór, terenami rekreacyjnymi, trasami spacerowymi, rowerowymi … u podnóża Szyndzielni i stoku Dębowca. To idealna przestrzeń do życia, zarówno dla osób prowadzących bardzo aktywny tryb życia, jak i ceniących sobie ciszę i spokój. Niepowtarzalnym atutem jest cudowny widok i bezpośrednia bliskość zieleni i panoramą gór dających możliwość obcowania z przyrodą przez okrągły rok. W tak wyjątkowej lokalizacji i prestiżowej dzielnicy miasta cieszysz się każdą piękną porą roku…';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_1_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-tree"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_1_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'zielona okolica';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_2_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-map-location-dot"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_2_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'doskonała lokalizacja';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_3_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-bell-slash"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_3_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'cicha okolica';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_4_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-key"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_4_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'idealne pod wynajem';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_5_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-wallet"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_5_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'najlepsza cena';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_6_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-shield"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_6_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'pewna inwestycja';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_7_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-coins"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_7_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'vat i amortyzacja';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_8_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-regular fa-flag"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_8_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'idealne na start';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_9_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-person-through-window"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_9_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'duże okna';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_10_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-maximize"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_10_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'poszukiwane metraze';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_11_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-user-tag"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_11_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'idealne pod wynajem';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_12_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-scale-balanced"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_12_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'przejrzysta prawna sytuacja inwestora';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_2_sekcji_ikon_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Jedna z podstawowych zasad rynku nieruchomości dla Kupujących, mówi o tym, że najważniejszym kryterium określającym wartość czy atrakcyjność nieruchomości jest po pierwsze: LOKALIZACJA, po drugie LOKALIZACJA, po trzecie LOKALIZACJA.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Komfort w doskonałym stylu';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Zacisze Bobrowniki to nie tylko lokalizacja, ale również przyjazny klimat. Inwestycja obejmuje dwa budynki jednorodzinne dwulokalowe w zabudowie szeregowej. Mieszkania na parterze mają powierzchnię 55,12 m², natomiast na piętrze – 45,96 m² dodatkowo strych do własnej adaptacji ok. 15 m2 . Budynki wyróżnia atrakcyjna, nowoczesna architekturą, czystymi i prostymi liniami, szczególnie widocznymi w elementach zewnętrznych. Nasze budynki są zaprojektowane tak, aby wpisywały się idealnie w sąsiedztwo i zielone tereny. Stawiamy na połączenie elegancji z naturą zarówno przy doborze materiałów wykończeniowych jak i przy projekcie samej konstrukcji domu. Od samego początku zamysłem była prostota i funkcjonalność, bez nadmiernych ekstrawagancji. Nasze nieruchomości spełniają wszystkie warunki idealnego domu rodzinnego.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_1_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-house"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikona_1_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Wysoki standard';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_1_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Do budowy domów stosujemy sprawdzone materiały i technologie, które zapewniają wieloletnie użytkowanie.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_2_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-solid fa-key"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikona_2_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'PRYWATNOŚĆ ORAZ SPOKÓJ';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_2_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Osobne wejścia do budynków, odzielenie ścianą akustyczą garażową, przekładają się na codzienny komfort mieszkańców.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'ikona_3_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = '<i class="fa-brands fa-hotjar"></i>';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_ikona_3_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'OGRZEWANIE';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_ikona_3_sekcji_ostatniej_na_stronie_glownej';
        $setting->type = 'text';
        $setting->content = 'Mieszkania mają ogrzewanie gazowe podłogowe, co gwarantuje szybsze ogrzewanie i lepszy komfort w użytkowaniu.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_na_stronie_wodna';
        $setting->type = 'text';
        $setting->content = 'wodna';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_na_stronie_wodna';
        $setting->type = 'text';
        $setting->content = 'jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_1_na_stronie_wodna';
        $setting->type = 'photo';
        $setting->content = 'wodna-1.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_2_na_stronie_wodna';
        $setting->type = 'photo';
        $setting->content = 'wodna-2.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_3_na_stronie_wodna';
        $setting->type = 'text';
        $setting->content = 'wodna-3.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_1_na_stronie_wodna';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_2_na_stronie_wodna';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_3_na_stronie_wodna';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_na_stronie_kopernika';
        $setting->type = 'text';
        $setting->content = 'kopernika';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_na_stronie_kopernika';
        $setting->type = 'text';
        $setting->content = 'jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_1_na_stronie_kopernika';
        $setting->type = 'photo';
        $setting->content = 'kopernika-1.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_2_na_stronie_kopernika';
        $setting->type = 'photo';
        $setting->content = 'kopernika-2.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_3_na_stronie_kopernika';
        $setting->type = 'photo';
        $setting->content = 'kopernika-3.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_1_na_stronie_kopernika';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_2_na_stronie_kopernika';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_3_na_stronie_kopernika';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_na_stronie_dlugosza';
        $setting->type = 'text';
        $setting->content = 'Długosza';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_na_stronie_dlugosza';
        $setting->type = 'text';
        $setting->content = 'jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_1_na_stronie_dlugosza';
        $setting->type = 'photo';
        $setting->content = 'dlugosza-1.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_2_na_stronie_dlugosza';
        $setting->type = 'photo';
        $setting->content = 'dlugosza-2.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_3_na_stronie_dlugosza';
        $setting->type = 'photo';
        $setting->content = 'dlugosza-3.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_4_na_stronie_dlugosza';
        $setting->type = 'photo';
        $setting->content = 'dlugosza-4.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_1_na_stronie_dlugosza';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_2_na_stronie_dlugosza';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_3_na_stronie_dlugosza';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_4_na_stronie_dlugosza';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_sekcji_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Osiedle Luxor Residence';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_1_sekcji_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Ogłaszamy NOWY ETAP inwestycji osiedla sądowego. Pozostajemy w tej prestiżowej dzielnicy Kamienicy. To przecież wyjątkowa inwestycja zlokalizowana w niesamowicie widokowej, malowniczej i prestiżowej dzielnicy Bielska-Białej. To doskonała propozycja dla osób poszukujących komfortowego i pełnego słońca miejsca lub inwestycji, znajdującej się w najlepszej i zielonej części miasta.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_2_sekcji_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Osiedle Sądowe to połączenie eleganckiej i cudownie nasłonecznionej przestrzeni salonu i sypialni - ogromnych okien w całym apartamencie, wysokiej jakości materiałów budowlanych i wykonania oraz funkcjonalnych rozwiązań. Wysoki standard inwestycji, zastosowanie nowoczesnej technologii oraz profesjonalizm i dbałość o każdy szczegół zapewniają Apartamentom najwyższą jakość - ale to tylko niektóre jej atuty.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_3_sekcji_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Osiedle Sądowe to jedna z najpiękniej położonych inwestycji w Bielsku-Białej otoczonych zielenią pobliskich gór, terenami rekreacyjnymi, trasami spacerowymi, rowerowymi ... u podnóża Szyndzielni i stoku Dębowca. Piękna okolica, doskonały dojazd do centrum miasta jak i obwodnic Bielska-Białej, bliskość do transportu miejskiego, licznych punktów handlowych i usługowych, sklepów, placówek medycznych i wiele innych ... czyni to miejsce szczególnie atrakcyjnym.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_4_sekcji_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'To projekt idealny, dopasowany do potrzeb rynku. W ofercie posiadamy inwestycyjne apartamenty już od 24m², dwupokojowe z sypialnią od 33m² i nieco bardziej przestronne 36m² oraz apartamenty 3 pokojowe o powierzchni ok. 45m².';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_5_sekcji_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Doskonała oferta dla osób poszukujących najbardziej atrakcyjnych inwestycji na rynku nieruchomości i najbardziej poszukiwanych powierzchni. Spraw sobie przyjemność i korzystaj ze wszystkich udogodnień i optymalnie zaprojektowanych powierzchni - przestronnych i komfortowych apartamentów.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_sekcji_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'search.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_sekcji_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Charakterystyka inwestycji – SIŁA RÓŻNORODNOŚCI POWIERZCHNI';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_1_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Nowoczesne Apartamenty inwestycyjne i najczęściej poszukiwanych powierzchniach: 24m² / 33m² / 36m² / 45m²';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_2_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Jak częściej pożądane i funkcjonalne apartamenty: jednopokojowe, dwupokojowe, trzypokojowe';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_3_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Garaż podziemny, miejsca postojowe na zewnątrz, winda';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_4_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Dodatkowe pomieszczenia wspólne na rowery / sprzęt zimowy';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_5_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Ogrzewanie podłogowe, ciepła woda z sieci miejskiej Therma';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_6_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Błyskawiczny internet - światłowody';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_7_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Funkcjonalne apartamenty z dużym przeszkleniem, z balkonami o najwyższych standardach wykończenia';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_8_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Widokowa działka na wysokości 420 m n.p.m.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_9_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Dogodny dojazd nową, oświetloną drogą asfaltową';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_10_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Zaciszne miejsce z dala od zgiełku miasta';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_11_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Czyste i ekologiczne miejsce – bez smogu';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'lista_12_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Bezpośredni kontakt z naturą';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_1_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Osiedle sądowe to nie tylko modna lokalizacja, to idealny projekt dla osób poszukujących najbardziej atrakcyjnych inwestycji na rynku nieruchomości. To najnowsza inwestycja przygotowana w oparciu o NAJBARDZIEJ POŻĄDANE i POSZUKIWANE METRAŻE.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_2_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Nowoczesny budynek, 4 kondygnacje i 75 luksusowych, funkcjonalnych, nasłonecznionych, widokowych apartamentów z prywatnymi balkonami lub niesamowicie dużym przeszkleniem. Inwestycja oferuje wybór komfortowych 1-pokojowych, 2-pokojowych i 3-pokojowych apartamentów, jedynych w swoim rodzaju, w niesamowitej pełnej zieleni i ciszy lokalizacji. To jedyne takie miejsce w Bielsku-Białej.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '7.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Dlaczego warto wybrać Osiedle Luxor Residence?';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_1_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '1.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_1_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_1_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'PERFEKCYJNA LOKALIZACJA';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_1_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'To jedno z najpiękniejszych, zielonych i prestiżowych miejsc Bielska-Białej. To cicha, malownicza, zielona okolica i niewielka odległość od Centrum sprawiają, że jest to najlepsze i wyjątkowe miejsce pozwalające cieszyć się zarówno krajobrazem pobliskich gór, Stoku Dębowca, Szyndzielni jak i udogodnieniami naszego miasta. To także bezpośredni dostęp do licznych punktów handlowo-usługowych oraz komunikacji miejskiej. Unikalna lokalizacja zapewnia mnogość rozwiązań związanych z rozrywką, relaksem, spotkaniami w gronie przyjaciół i znajomych, a także aktywnym wypoczynkiem. Ukoronowaniem wszystkich zalet tej lokalizacji jest umiejscowienie apartamentów w Otulinie Parku Krajobrazowo – Przyrodniczego Beskidu Śląskiego z dala od jakiejkolwiek zabudowy mieszkaniowej, co w połączeniu z dużymi przeszkleniami – co gwarantuje idealne walory widokowe.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_2_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '2.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_2_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_2_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'ZIELONA OKOLICA';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_2_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Inwestycja zlokalizowana jest w Otulinie Parku Krajobrazowo-Przyrodniczego Beskidu Śląskiego. Niesamowicie widokowej, malowniczej i najlepszej dzielnicy miasta, w bezpośrednim sąsiedztwie Szyndzielni i stoku Dębowca, otoczona zielenią pobliskich gór, terenami rekreacyjnymi, trasami spacerowymi, rowerowymi. Okolica wręcz zaprasza do aktywnego wypoczynku, spacerów z rodziną, górskich wędrówek i sportów bez względu na porę roku.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_3_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '3.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_3_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_3_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'IDEALNA INWESTYCJA';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_3_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Najbardziej poszukiwane inwestycyjne powierzchnie apartamentów, loggia w każdym apartamencie, bardzo cicha lokalizacja, garaż podziemny z automatyczną bramą wjazdową, miejsca parkingowe, rowerownia, nowoczesne ogrzewanie podłogowe, całkowity brak gazu w budynku, światłowody (Internet, TV), prestiżowa lokalizacja, doskonała komunikacja, widok na panoramę gór, zieleń i tereny rekreacyjne, ścieżki rowerowe, zabytki miasta Bielska-Białej.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_4_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '4.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_4_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_4_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'ZWROT VAT';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_4_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Apartamenty SZYNDZIELNIA w Naszej ofercie POZWALAJĄ NA PEŁNE ODLICZENIE podatku VAT 23%. Każda z osób przy inwestowaniu w apartament, niezależnie od tego czy prowadzi działalność gospodarczą czy też nie, jest uprawniona do otrzymania całkowitego zwrotu podatku VAT. Nabywając Nasz Apartament, w rzeczywistości ponoszą Państwo jedynie jego koszty ceny netto. Szczegółowe informacje na ten temat uzyskają Państwo w naszym KATALOGU';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_5_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '5.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_5_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_5_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'BEZPIECZNA LOKATA';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_5_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Inwestowanie w nieruchomości to jedna z bardziej bezpiecznych możliwości inwestowania dużego kapitału. Rentowność apartamentów na wynajem w Polsce jest znacznie wyższa niż uzyskiwana z lokat bankowych i obligacji. Zainteresowanie apartamentami na wynajem już obecnie jest bardzo duże i stale rośnie. Można pokusić się o stwierdzenie, że inwestowanie w apartamenty to obecnie niezwykle atrakcyjna inwestycja, która przyniesie wymierne korzyści finansowe w postaci miesięcznego przychodu jak i wzrostu wartości nieruchomości w perspektywie dłuższego czasu. Z myślą o sobie czy o przyszłości dzieci mogą więc stanowić pasywne źródło dochodów. O tym, czy apartament będzie bezpieczną i pewną lokatą kapitału decyduje najważniejszy czynnik - jego lokalizacja.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_6_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '6.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_6_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_6_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'NOWOCZESNE WNĘTRZA';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_6_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Lubimy i cenimy dobre projekty architektoniczne. Nasze Apartamenty to luksusowa i optymalna przestrzeń dla osób oczekujących czegoś więcej. W swoich realizacjach stawiamy przede wszystkim na niebanalną, nowoczesną architekturę, wysoką jakość wykonania oraz funkcjonalność. Dbając o najwyższe poczucie komfortu, optymalne wykorzystanie powierzchni, stawiamy na współpracę Naszych klientów z najlepszymi projektantami, architektami, wykonawcami oraz dostawcami materiałów i produktów budowlanych. Mamy świadomość, że niebanalna architektura przyciąga ciekawych ludzi.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_7_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '7.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_7_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_7_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Duże okna';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_7_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Walory estetyczne i bardzo dobre parametry techniczne stały się priorytetem przy doborze odpowiednich okien. Wszystkie apartamenty posiadają duże okna od renomowanych dostawców, które utrzymują ciepło i zapewniają odpowiedni poziom naświetlenia wnętrza. Zdjęcie';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_8_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '8.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_8_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_8_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'STREFA INWESTORA';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_8_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'ZBIERAJ OWOCE SWOJEJ INWESTYCJI Czerpanie zysków z apartamentu jest bajecznie proste. Apartament będzie pracować na Ciebie przy minimum Twojego zaangażowania. Pozyskanie zainteresowanego wynajmem nie będzie specjalnie trudne, ponieważ obecnie rynek mieszkaniowy należy raczej do posiadaczy lokali. Na wysokość czynszu ma wpływ zarówno standard mieszkania, jak i jego lokalizacja ... Oznacza to, że do niemal każdego mieszkania, da się szybko znaleźć najmującego. Tak więc wynajem apartamentu zapewni inwestorowi stałe przychody – to taki „drugi dom”, który przynosi zyski przez cały rok ale też wygodna i bezpieczna inwestycja, więc ... skoro wiele lat pracowałeś / pracowałaś na to by mieć taki apartament – to pozwól, by Twój apartament pracował teraz na Ciebie.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_9_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '9.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_9_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_9_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Nagłówek 9';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_9_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'treść';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_10_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '10.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_10_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_10_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Ostatni nagłówek';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_10_karuzeli_1_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'treść';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '8.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'ARCHITEKTURA UBRANA W KOLORY';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_sekcji_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Budowa i elewacja budynku są ważnymi elementami jego projektowania i wykonania, które mają istotny wpływ na jego wygląd zewnętrzny i funkcjonalność. Oto kilka pięknych aspektów związanych z nimi';
        $setting->save();
        
        $setting = new Setting();
        $setting->place = 'naglowek_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Poznaj lepiej inwestycję osiedle sądowe';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Budynek Apartamenty Rzuty 3D Dlaczego warto?';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_1_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '1.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_2_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '2.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_3_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '3.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_4_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '4.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_5_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '10.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_6_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '5.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_7_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '6.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_8_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '7.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_9_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '8.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_10_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = '9.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_1_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_2_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_3_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_4_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_5_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_6_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_7_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_8_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_9_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_10_karuzeli_2_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Atrakcje okolicy inwestycji';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'W Bielsku-Białej w prestiżowej dzielnych Kamienica, z widokiem na panoramę gór i na obrzeżach otulinie Parku Krajobrazowo – Przyrodniczego Beskidu Śląskiego, to spełnienie marzeń każdego, kto poszukuje wyjątkowej inwestycji w wyjątkowym miejscu. Trudno sobie wyobrazić bardziej zielone miejsce do zamieszkania niż tutaj.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'https://www.apartamentyszyndzielnia.pl/files/boksy/raj-dla-rowerzystow.rower-2.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'RAJ DLA ROWERZYSTÓW';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'podtytul_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'TRASY ANDURO TRAILS';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Kompleks „Enduro Trails – Bielsko-Biała” to sieć jednokierunkowych pięknych, widokowych tras rowerowych, tzw. „singletracków”. Są to najbardziej lubiane przez kolarzy górskich, wąskie, kręte i pofalowane ścieżki o różnym stopniu trudności, od tych łatwiejszych, łagodnie opadających, aż po strome, wymagające technicznie zjazdy. Centrum ścieżek wraz z punktem informacyjnym mieści się w obrębie tzw. miejskich Błoni, u stóp Koziej Góry. Trasy rozpościerają się pomiędzy Szyndzielnią i Kozią Górą (w masywie Klimczoka). Szyndzielnia wznosi się na wysokość 1030 metrów nad poziomem morza. Na jej szczyt można wjechać nowoczesną koleją gondolową (Kolej Linowa Szyndzielnia). Czy to nie znakomity pomysł na relaks ...?';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'https://www.apartamentyszyndzielnia.pl/files/boksy/szyndzielnia-kolejgondolowa-i-wieza-widokowa.szyndzielnia 20.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'SZYNDZIELNIA KOLEJ GONDOLOWA I WIEŻA WIDOKOWA';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'podtytul_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'ZIAD TOWER';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Jeśli nie lubisz za bardzo chodzić po górach, cenisz wygodę a chciałbyś się łatwo i wygodnie dostać prawie na sam szczyt - to Szyndzielnia jest jak najbardziej dla Ciebie. Na szczyt prowadzi nowoczesna kolej gondolowa długości 1810 m, będąca jedną z największych atrakcji Bielska-Białej. Charakterystyczne jaskrawożółte, wygodne, sześcioosobowe wagoniki przez cały rok przeniosą Cię wśród koron drzew na sam szczyt gdzie podziwiać możesz piękne widoki o każdej porze roku. Chcesz sięgnąć jeszcze wyżej? Warto wejść na wieżę widokową aby zobaczyć panoramę samego miasta oraz Beskidu Małego i Śląskiego. Później masz do wyboru piesze szlaki, spacer na Klimczok, trasy rowerowe ... Szyndzielnia to doskonałe miejsce na wypoczynek i spacer na świeżym powietrzu. MIEJSCE DLA AKTYWNYCH I MIŁOŚNIKÓW GÓRSKICH KRAJOBRAZÓW';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'https://www.apartamentyszyndzielnia.pl/files/boksy/miejsce-dla-aktywnych.bieganie.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'MIEJSCE DLA AKTYWNYCH';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'podtytul_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'NADSZEDŁ CZAS NA LAS';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Pobliskie góry, lasy, oznaczone szlaki turystyczne i wytyczone ścieżki biegowe są idealne miejsce do uprawiania turystyki pieszej. Możesz wybrać się zarówno na spacery w rodzinnym gronie ale znajdziesz coś dla osób aktywnych, spragnionych biegania czy nordic walkingu w otoczeniu zieleni i czystego powietrza, przestrzeni i pięknych widoków. Dla biegaczy szczególnie polecana jest ścieżka biegowa w Bielsku-Białej w Wapienicy o długości 12,5-km, która wiedzie malowniczymi terenami Doliny Wapienicy. Bezpośrednia lokalizacja i okolica wręcz zaprasza do aktywnego wypoczynku, spacerów z rodziną, górskich wędrówek i sportów bez względu na porę roku.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'https://www.apartamentyszyndzielnia.pl/files/boksy/cisza-to-luksus-dla-wszystkich.szyndzielnia 8-540x330.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'tytul4';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'podtytul_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'podtytul';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'paragraf';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'https://www.apartamentyszyndzielnia.pl/files/boksy/osrodek-rekreacyjno-narciarski-debowiec.debowiec.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'MIEJSCE DLA AKTYWNYCH';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'podtytul_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'tytul';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Pobliskie góry, lasy, oznaczone szlaki turystyczne i wytyczone ścieżki biegowe są idealne miejsce do uprawiania turystyki pieszej. Możesz wybrać się zarówno na spacery w rodzinnym gronie ale znajdziesz coś dla osób aktywnych, spragnionych biegania czy nordic walkingu w otoczeniu zieleni i czystego powietrza, przestrzeni i pięknych widoków. Dla biegaczy szczególnie polecana jest ścieżka biegowa w Bielsku-Białej w Wapienicy o długości 12,5-km, która wiedzie malowniczymi terenami Doliny Wapienicy. Bezpośrednia lokalizacja i okolica wręcz zaprasza do aktywnego wypoczynku, spacerów z rodziną, górskich wędrówek i sportów bez względu na porę roku.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'https://www.apartamentyszyndzielnia.pl/files/boksy/workation-czy-home-office.workstation2.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'CISZA TO LUKSUS DLA WSZYSTKICH';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'podtytul_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Podtytul';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Pobliskie góry, lasy, oznaczone szlaki turystyczne i wytyczone ścieżki biegowe są idealne miejsce do uprawiania turystyki pieszej. Możesz wybrać się zarówno na spacery w rodzinnym gronie ale znajdziesz coś dla osób aktywnych, spragnionych biegania czy nordic walkingu w otoczeniu zieleni i czystego powietrza, przestrzeni i pięknych widoków. Dla biegaczy szczególnie polecana jest ścieżka biegowa w Bielsku-Białej w Wapienicy o długości 12,5-km, która wiedzie malowniczymi terenami Doliny Wapienicy. Bezpośrednia lokalizacja i okolica wręcz zaprasza do aktywnego wypoczynku, spacerów z rodziną, górskich wędrówek i sportów bez względu na porę roku.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'https://www.apartamentyszyndzielnia.pl/files/boksy/ukojenie-w-nutach.cavatina.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'MIEJSCE DLA AKTYWNYCH';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'podtytul_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'I MIŁOŚNIKÓW GÓRSKICH KRAJOBRAZÓW';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Pobliskie góry, lasy, oznaczone szlaki turystyczne i wytyczone ścieżki biegowe są idealne miejsce do uprawiania turystyki pieszej. Możesz wybrać się zarówno na spacery w rodzinnym gronie ale znajdziesz coś dla osób aktywnych, spragnionych biegania czy nordic walkingu w otoczeniu zieleni i czystego powietrza, przestrzeni i pięknych widoków. Dla biegaczy szczególnie polecana jest ścieżka biegowa w Bielsku-Białej w Wapienicy o długości 12,5-km, która wiedzie malowniczymi terenami Doliny Wapienicy. Bezpośrednia lokalizacja i okolica wręcz zaprasza do aktywnego wypoczynku, spacerów z rodziną, górskich wędrówek i sportów bez względu na porę roku.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'https://www.apartamentyszyndzielnia.pl/files/boksy/cxvbxcvbxcvb.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'CISZA TO LUKSUS DLA WSZYSTKICH';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'podtytul_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'NADSZEDŁ CZAS NA LAS';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Góry i las to istotny element otoczenia Apartamentów Szyndzielnia. Wystarczy parę chwil aby poczuć uspokajająca energię, która płynie prosto z natury. Ty decydujesz o własnym tempie, ty decydujesz jaki czas spędzisz w Naszej pobliskiej „fabryce tlenu”, ty sam wiesz, co właśnie Tobie jest potrzebne. Idealne miejsce na odpoczynek od miejskiego pędu a może to ten moment by na chwilę zwolnić ... To nie wymaga wysiłku. Pobyt na łonie natury, spacer wśród drzew, świeże powietrze i poczucie niezwykłej leśnej atmosfery ma same plusy. Las to znakomity "wychowawca", a w szczególności dzieci, które na świeżym powietrzu lepiej się rozwijają, poprawia się ich sprawność fizyczna. Nie wspominając już o wspaniałej stronie rodzinnych spacerów po lesie - o budowaniu i utrwalaniu więzi rodzinnych. Ten las jest dla Ciebie, dla Was ...';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'https://www.apartamentyszyndzielnia.pl/files/boksy/idealna-inwestycja.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'MIEJSCE DLA AKTYWNYCH';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'podtytul_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'I MIŁOŚNIKÓW GÓRSKICH KRAJOBRAZÓW';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Pobliskie góry, lasy, oznaczone szlaki turystyczne i wytyczone ścieżki biegowe są idealne miejsce do uprawiania turystyki pieszej. Możesz wybrać się zarówno na spacery w rodzinnym gronie ale znajdziesz coś dla osób aktywnych, spragnionych biegania czy nordic walkingu w otoczeniu zieleni i czystego powietrza, przestrzeni i pięknych widoków. Dla biegaczy szczególnie polecana jest ścieżka biegowa w Bielsku-Białej w Wapienicy o długości 12,5-km, która wiedzie malowniczymi terenami Doliny Wapienicy. Bezpośrednia lokalizacja i okolica wręcz zaprasza do aktywnego wypoczynku, spacerów z rodziną, górskich wędrówek i sportów bez względu na porę roku.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'photo';
        $setting->content = 'https://www.apartamentyszyndzielnia.pl/files/boksy/zielona-okolica.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'CISZA TO LUKSUS DLA WSZYSTKICH';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'podtytul_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'NADSZEDŁ CZAS NA LAS';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji';
        $setting->type = 'text';
        $setting->content = 'Góry i las to istotny element otoczenia Apartamentów Szyndzielnia. Wystarczy parę chwil aby poczuć uspokajająca energię, która płynie prosto z natury. Ty decydujesz o własnym tempie, ty decydujesz jaki czas spędzisz w Naszej pobliskiej „fabryce tlenu”, ty sam wiesz, co właśnie Tobie jest potrzebne. Idealne miejsce na odpoczynek od miejskiego pędu a może to ten moment by na chwilę zwolnić ... To nie wymaga wysiłku. Pobyt na łonie natury, spacer wśród drzew, świeże powietrze i poczucie niezwykłej leśnej atmosfery ma same plusy. Las to znakomity "wychowawca", a w szczególności dzieci, które na świeżym powietrzu lepiej się rozwijają, poprawia się ich sprawność fizyczna. Nie wspominając już o wspaniałej stronie rodzinnych spacerów po lesie - o budowaniu i utrwalaniu więzi rodzinnych. Ten las jest dla Ciebie, dla Was ...';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'naglowek_na_stronie_o_nas';
        $setting->type = 'text';
        $setting->content = 'O inwestorze';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'paragraf_na_stronie_o_nas';
        $setting->type = 'text';
        $setting->content = 'Nasza firma powstała w 2008 roku. Od początku stawiamy na wysoką jakość i oryginalność. Zajmujemy budową domów i remontami wnętrz w wysokim standardzie, dostosowanymi do różnych potrzeb klienta. W odniesieniu do każdej inwestycji zachowujemy najwyższe standardy deweloperskie i dbamy o to, by inwestycje mieściły się w spokojnych i zielonych lokalizacjach, z dala od zgiełku, wśród podobnych zabudowań. Nasze inwestycje wyróżniają innowacyjne technologie oraz bardzo atrakcyjna architektura. Każdy projekt tworzymy z myślą o przyszłych mieszkańcach.';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'zdjecie_na_stronie_o_nas';
        $setting->type = 'photo';
        $setting->content = 'logo.png';
        $setting->save();

        $setting = new Setting();
        $setting->place = 'alt_zdjecie_na_stronie_o_nas';
        $setting->type = 'text';
        $setting->content = 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów';
        $setting->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

1. algoritmická na zahriatie * 

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo "SuperFaktura\n";
    } elseif ($i % 3 == 0) {
        echo "Super\n";
    } elseif ($i % 5 == 0) {
        echo "Faktura\n";
    } else {
        echo $i . "\n";
    }
}

2. databázová

SELECT *
FROM duplicates
WHERE value IN (
    SELECT value
    FROM duplicates
    GROUP BY value
    HAVING COUNT(*) > 1
);

//Bude vaše riešenie efektívne fungovať aj na tabuľke s veľkým počtom riadkov (milión a viac)? Vysvetlite prečo a ako.

//Pri veľkom počte dát pomôže ak je indexovaný, vykon je týmto lepší.

//Pomôže aj indexovanie pre value
CREATE INDEX index_value ON duplicates (value);

//Závisy samozrejme aj na hardwere a údržbe databázy pri veľkých dátach

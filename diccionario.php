<?php
// Diccionario de columnas con sus índices
$column_dict = [
    'TIPODOC' => 0,
    'CEDULA' => 1,
    'DE' => 2,
    'FECHA' => 3,
    'EXAMEN' => 4,
    'TRABALTU' => 5,
    'ESPACIOS' => 6,
    'EOSTEO' => 7,
    'EMPRESA' => 8,
    'NOMBRE' => 9,
    'FEC_NAC' => 10,
    'EDAD' => 11,
    'RCAIDA' => 12,
    'LUGAR' => 13,
    'RH' => 14,
    'SEXO' => 15,
    'DIRECCION' => 16,
    'ESTRATO' => 17,
    'TELEFONO' => 18,
    'EMAIL' => 19,
    'ESTADO' => 20,
    'NHIJOS' => 21,
    'NIVELEDU' => 22,
    'CURSO' => 23,
    'RESPONDE' => 24,
    'AREA' => 25,
    'CARGO' => 26,
    'EPS' => 27,
    'AFP' => 28,
    'ARL' => 29,
    'TIEMPO1' => 30,
    'EMPRESA1' => 31,
    'OCUPACION1' => 32,
    'F1' => 33,
    'Q1' => 34,
    'B1' => 35,
    'E1' => 36,
    'S1' => 37,
    'P1' => 38,
    'TIEMPO2' => 39,
    'EMPRESA2' => 40,
    'OCUPACION2' => 41,
    'F2' => 42,
    'Q2' => 43,
    'B2' => 44,
    'E2' => 45,
    'S2' => 46,
    'P2' => 47,
    'TIEMPO3' => 48,
    'EMPRESA3' => 49,
    'OCUPACION3' => 50,
    'F3' => 51,
    'Q3' => 52,
    'B3' => 53,
    'E3' => 54,
    'S3' => 55,
    'P3' => 56,
    'EVENTO1' => 57,
    'TIPO1' => 58,
    'CALIFICADA' => 59,
    'EVENTO2' => 60,
    'TIPO2' => 61,
    'LESION2' => 62,
    'DIASINC' => 63,
    'EVENTO3' => 64,
    'TIPO3' => 65,
    'LESION3' => 66,
    'DIASINC2' => 67,
    'HIPERTENSI' => 68,
    'CARDIOPATI' => 69,
    'DIABETES' => 70,
    'CANCER' => 71,
    'ALERGIAS' => 72,
    'ASMA' => 73,
    'OSTEOMUSCU' => 74,
    'ARTRITIS' => 75,
    'VARICES' => 76,
    'TBC' => 77,
    'ACV' => 78,
    'SINCONVUL' => 79,
    'SIQUIATRI' => 80,
    'OTROSANFA' => 81,
    'QUIRURGICO' => 82,
    'ALERGICO' => 83,
    'TOXICOS' => 84,
    'FARMACOLO' => 85,
    'TRAUMATICO' => 86,
    'PSIQUIATRI' => 87,
    'NOREFIERE' => 88,
    'OBSERPERSO' => 89,
    'DESTAREA' => 90,
    'MENARQUIA' => 91,
    'CICLOS' => 92,
    'GESTACIONE' => 93,
    'PARTOS' => 94,
    'CESAREAS' => 95,
    'ABORTOS' => 96,
    'ECTOPICO' => 97,
    'HIJOS' => 98,
    'FULTPAR' => 99,
    'FULTMEN' => 100,
    'PLANIFICA' => 101,
    'METODO' => 102,
    'FULTCIT' => 103,
    'RESCIT' => 104,
    'FULTMAM' => 105,
    'RESMAM' => 106,
    'DESREVSIS' => 107,
    'CIGARRILLO' => 108,
    'FUREGU' => 109,
    'TIEMPO' => 110,
    'ALCOHOL' => 111,
    'ALREGU' => 112,
    'DEPORTE' => 113,
    'DEREGU' => 114,
    'OFIEXTRA' => 115,
    'CUALOE' => 116,
    'CUALV' => 117,
    'PESO' => 118,
    'TALLA' => 119,
    'PULSO' => 120,
    'RESPIRA' => 121,
    'TENSION' => 122,
    'PERIMETRO' => 123,
    'HEMISFERIO' => 124,
    'PIELEF' => 125,
    'FANERAS' => 126,
    'PALPACION' => 127,
    'GENITALEXT' => 128,
    'PARPADOS' => 129,
    'CONJUNTIVA' => 130,
    'PUPILAS' => 131,
    'OIDOS' => 132,
    'NARIZ' => 133,
    'RINOSCOPIA' => 134,
    'MUCOSABU' => 135,
    'DIENTES' => 136,
    'EVARICES' => 137,
    'FARINGE' => 138,
    'AMIGDALA' => 139,
    'CUELLO' => 140,
    'TORAX' => 141,
    'AUSRESPIRA' => 142,
    'AUSCARDIA' => 143,
    'ABDOMEN' => 144,
    'ICOLUMNA' => 145,
    'PCOLUMNA' => 146,
    'REFLEJOS' => 147,
    'NEUROLOGIC' => 148,
    'ESFERA' => 149,
    'CVALINEA' => 150,
    'ESPIROME' => 151,
    'AUDIOME' => 152,
    'EVOZ' => 153,
    'OPTOMETRA' => 154,
    'VISIOMETRA' => 155,
    'SICOLOGIA' => 156,
    'RAYOSXTO' => 157,
    'RAYOSXCV' => 158,
    'EKG' => 159,
    'LABORATO' => 160,
    'LABORATOC' => 161,
    'OTROS' => 162,
    'OTROSE' => 163,
    'OTROSEXA' => 164,
    'CLASIFICA1' => 165,
    'CLASIFICA2' => 166,
    'CLASIFICA3' => 167,
    'CLASIFICA4' => 168,
    'CLASIFICA5' => 169,
    'CLASIFICA6' => 170,
    'CLASIFICA7' => 171,
    'CLASIFICA8' => 172,
    'CLASIFICA9' => 173,
    'CLASIFIC10' => 174,
    'CLASIFIC11' => 175,
    'CLASIFIC12' => 176,
    'CLASIFIC13' => 177,
    'CLASIFIC14' => 178,
    'CLASIFIC15' => 179,
    'CLASIFIC16' => 180,
    'CLASIFIC17' => 181,
    'DIAGNOSTIC' => 182,
    'CIE101' => 183,
    'CIE102' => 184,
    'CIE103' => 185,
    'CIE104' => 186,
    'OBSERVACIO' => 187,
    'RECOMENDA' => 188,
    'SVE1' => 189,
    'SVE2' => 190,
    'SVE3' => 191,
    'SVE4' => 192,
    'SVE5' => 193,
    'SVE6' => 194,
    'SVE7' => 195,
    'SVE8' => 196,
    'SVE9' => 197,
    'SVE10' => 198,
    'SVE11' => 199,
    'SVE12' => 200,
    'SVE13' => 201,
    'SVE14' => 202,
    'SVE15' => 203,
    'SVE16' => 204,
    'SVE17' => 205,
    'SVE18' => 206,
    'SVE19' => 207,
    'SVE20' => 208
];
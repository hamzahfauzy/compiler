Var bil: integer;
Begin
writeln('MENENTUKAN JENIS BILANGAN');
writeln('**************************');
write('Masukkan angka: ');readln(bil);
    if bil mod 2 = 0 then
    writeln('Bilangan genap')
    else
    writeln('Bilangan ganjil');
    readKey;
End.
USES crt;
Var bil: integer;
Begin
	readln(bil);
	if bil mod 2 = 0 then
		writeln('Bilangan genap')
	else
		writeln('Bilangan ganjil');
End.
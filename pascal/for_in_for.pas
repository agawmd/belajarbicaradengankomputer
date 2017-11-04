uses crt;

var n, x, y : byte;


procedure status(x,y : byte);
begin
  window(1, 13, 20, 16);
background(4);
  clrscr;
  writeln('nilai y = ', y, ' ');
  writeln('nilai x = ', x, ' ');
  window(1,1,80,25);
  background(5);
  clrscr;
end;


begin
   window(1,1, 80,25);
   clrscr;
   write('N: ');
   readln(n);

   clrscr;
   for y:=1 to n do begin
     for x:= 1 to n do begin
        write(y);
        status(x,y);
        readln;
     end;
   end;
   writeln;
   writeln;
   writeln('selesai...............');


   readln;
end.

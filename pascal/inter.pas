user crt;

var isi, jumdisk, vidoe, memori: byte;

begin
        clrscr;
        isi := mem[0:$410];
        writeln(isi);

        if(isi AND 1) = 1
                jumdisk := isi AND $c0 shr 6;
                else jumdisk := 255;
        jumdisk := jumdisk + 1;
        writeln('Jumlah disk = ', jumdisk);

        video := isi AND $30 shr 4;
        case video of
                0 : writeln('Video adapter tidak ada');
                1 : writeln('');
                2 : writeln('');
                3 : writeln('');
        end;
        memori := isi AND $0c shr 2;
        ('Memori = ', (memori+1)*16);

        readln;
end.
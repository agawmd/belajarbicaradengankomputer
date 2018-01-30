package source;

import java.io.*;
import java.lang.StringBuilder;
import javax.swing.*;  


public class DataHandler {
	static String fileName = "/home/aga/Desktop/data.dat";


	public static void save(String s) {		
		try {
			String oldData = DataHandler.load();			
			BufferedWriter writer = new BufferedWriter(new FileWriter(fileName));

			writer.write(oldData);
			writer.write(s);
			writer.newLine();
			writer.close();

                        System.out.println("Berhasil Menimpan data.!!");
                        JOptionPane
				.showMessageDialog(
					null,
					"Berhasil menyimpan data..",
					"Info",
					JOptionPane.INFORMATION_MESSAGE
				);
		}
		catch(IOException e) {
                        System.out.println("Gagal menyimpan data.!!");
			JOptionPane
				.showMessageDialog(
					null,
					"Tidak dapat menyimpan data..!",
					"Peringatan",
					JOptionPane.WARNING_MESSAGE
				);
		} 
	}
	
	
	public static String load() {
		StringBuilder data = new StringBuilder();
		String line;

		try {
			BufferedReader reader = new BufferedReader(new FileReader(fileName));		
			while((line = reader.readLine()) != null) {
				data.append(line + "\n");
			}

			reader.close();
			return data.toString();
		}
		catch(IOException e) {
			return "";
		}
	}
}

//package server;

import java.io.*;
import java.net.*;

public class ServerTambah {

	public static void main (String args[]) {
		new ServerKalkulator('*', 5555).start();
	}
}
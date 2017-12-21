package server;

//package server;

import java.io.*;
import java.net.*;

public class ServerBagi{

	public static void main (String args[]) {
		new ServerKalkulator('/', 5558).start();
	}
}
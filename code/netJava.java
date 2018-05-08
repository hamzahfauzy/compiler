import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.Scanner;
public class netJava {
	
	private final String USER_AGENT = "Mozilla/5.0";
	
	public static void main(String[] args) throws Exception{
		netJava http = new netJava();

		System.out.println("Testing 1 - Send Http GET request");
		Scanner s = new Scanner(System.in);
		String Str = s.nextLine();
		Str = Str.replace(" ", "%20");
		http.sendGet(Str);
	}
	
	// HTTP GET request
		private void sendGet(String data) throws Exception {

			String url = "http://projectdemokita.xyz/test.php?data="+data;

			URL obj = new URL(url);
			HttpURLConnection con = (HttpURLConnection) obj.openConnection();

			// optional default is GET
			con.setRequestMethod("GET");

			//add request header
			con.setRequestProperty("User-Agent", USER_AGENT);

			int responseCode = con.getResponseCode();
			System.out.println("\nSending 'GET' request to URL : " + url);
			System.out.println("Response Code : " + responseCode);

			BufferedReader in = new BufferedReader(
			        new InputStreamReader(con.getInputStream()));
			String inputLine;
			StringBuffer response = new StringBuffer();

			while ((inputLine = in.readLine()) != null) {
				response.append(inputLine);
			}
			in.close();

			//print result
			System.out.println(response.toString());

		}

}

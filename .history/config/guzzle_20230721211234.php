use GuzzleHttp\Client;

class MyController extends Controller
{
    public function makeApiRequest()
    {
        // Create a new Guzzle client using the configuration defined in guzzle.php
        $client = new Client(config('guzzle'));

        try {
            // Make a GET request to the API endpoint
            $response = $client->get('/api/some-endpoint');

            // Check if the request was successful
            if ($response->getStatusCode() === 200) {
                // Handle the response data
                $data = json_decode($response->getBody(), true);
                // Process the data as needed
                return $data;
            } else {
                // Handle non-200 status code
                return response()->json(['error' => 'API request failed'], $response->getStatusCode());
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle request exception (e.g., network error, SSL certificate issue, etc.)
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

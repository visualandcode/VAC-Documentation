# Request 

### Curl 

```php
$get = $this->curl->setUri('http://example.com/api/');

$get->setHeader(array(
   'Content-Type' => 'application/json' , 
   'Accept' => 'application/json'	
));

// GET request to http://example.com/api/me/images?access_token=1234 and return response
$response = $get->get('me/images', [
    'access_token' => 1234
]);

echo $response->body;

// POST multipart/form-data request to http://example.com/api/me/images
$response = $get->post('me/images', [
    'access_token' => 1234,
    'image' => '@/home/mine/myimage.jpg'
]);

echo $response->body;
echo $response-->get('Content-Type');
echo $response-->statusCode;

// DELETE request to http://example.com/api/me/images
$response = $get->delete('me/images', [
    'access_token' => 1234,
    'image_id' => '321'
]);

echo $response->body;
```

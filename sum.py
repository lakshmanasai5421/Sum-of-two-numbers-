import json
from flask import Flask, request, jsonify, make_response

app = Flask(__name__)

@app.route('/sum', methods=['POST'])
def calculate_sum():
    try:
        # Get JSON data from the request
        data = request.get_json()

        # Extract 'a' and 'b' values
        a = int(data.get('a', 0))
        b = int(data.get('b', 0))

        # Calculate the sum
        result = a + b

        # Prepare the result data to be saved in JSON file
        output_data = {
            "a": a,
            "b": b,
            "sum": result
        }

        # Prepare response and set file download headers
        response = make_response(jsonify(output_data))
        response.headers['Content-Disposition'] = 'attachment; filename=result.json'
        response.headers['Content-Type'] = 'application/json'

        # Return response to be downloaded as result.json
        return response
    except Exception as e:
        return jsonify({"error": str(e)})

if __name__ == '__main__':
    app.run(host="0.0.0.0", port=5000)  # 0.0.0.0 makes it accessible externally

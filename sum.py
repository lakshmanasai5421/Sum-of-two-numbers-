from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/sum', methods=['POST'])
def calculate_sum():
    try:
        data = request.get_json()
        a = int(data.get('a', 0))
        b = int(data.get('b', 0))
        result = a + b
        return jsonify({"sum": result})
    except Exception as e:
        return jsonify({"error": str(e)})

if __name__ == '__main__':
    app.run(host="0.0.0.0", port=5000, debug=True)

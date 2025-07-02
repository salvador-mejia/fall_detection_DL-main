# Start Flask backend in new PowerShell window
Start-Process powershell -ArgumentList "cd backend; Set-ExecutionPolicy RemoteSigned -Scope Process; python app.py"

# Start React frontend in another PowerShell window
Start-Process powershell -ArgumentList "cd frontend; Set-ExecutionPolicy RemoteSigned -Scope Process; npm start"

# Start Python fall detection script in another PowerShell window
Start-Process powershell -ArgumentList "cd .; Set-ExecutionPolicy RemoteSigned -Scope Process; python mulytiple_target.py"
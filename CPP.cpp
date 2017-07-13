char grade;
string message = "";

cout << "Enter your grade:";
cin >> grade;

switch(grade){
	case 'A' || 'a':
		message = "Export quality.";
		break;
	case 'B' || 'b':
		message = "Local market.";
		break;
	case 'C' || 'c':
		message = "Good for blending.";
		break;
	default:
		message = "Invalid input.";
		break;
}
cout << "The message is " << message << "\n";
using System;

namespace Pgw.Entities
{
	/// <summary>
	/// Summary description for PgwStatus.
	/// </summary>
	public enum PgwStatus : byte
	{
		#region Common Statuses (0-9)
		/// <summary>
		/// transactions have been done successfully!
		/// </summary>
		Successful = 0,

		/// <summary>
		/// when status is dropped into an unknown state, this situations have
		/// to be known and are removed.
		/// </summary>
		PreRequest = 1,

		/// <summary>
		/// when timeout error occured, often when the authority timeout occured
		/// </summary>
		Timeout = 2,
		#endregion

		#region Financial Errors (10-19)
		/// <summary>
		/// when the card number is invalid
		/// </summary>
		InvalidCard = 10,

		/// <summary>
		/// when expiration date is invalid, or card has been expired
		/// </summary>
		ExpiredCard = 11,

		/// <summary>
		/// when pin code is incorrect
		/// </summary>
		IncorrectPin = 12,

		/// <summary>
		/// when amount is not in the valid ranges, or customer balance is not sufficant
		/// </summary>
		InsufficientFund = 13,

		/// <summary>
		/// when amount is upper than merchant's max transaction amount 
		/// </summary>
		InvalidMerchantMaxTransAmount = 14,

		/// <summary>
		/// when amount is upper than permitted daily max transactions amount 
		/// </summary>
		InvalidDailyMaxTransAmount = 15,

		/// <summary>
		/// when card bin is invalid
		/// </summary>
		InvalidBIN = 16,

		/// <summary>
		/// when cash card for paying invoice is not Parsian Cash Card
		/// </summary>
		InvalidCashCard = 17,

		/// <summary>
		/// when record of sale was settled and the requested trans is not valid.
		/// </summary>
		InvalidTransAfterSettlement = 18,

		#endregion

		#region Security Errors (20-29)
		AccessViolation = 20,

		InvalidAuthority = 21,

		MerchantAuthenticationFailed = 22,
		#endregion

		#region Logical Statuses (30-49)
		SaleIsAlreadyDoneSuccessfully = 30,

		SaleIsVoidedSuccessfully = 31,

		SaleIsReversaledSuccessfully = 32,

		/// <summary>
		/// customer tried passing his/her information some times for invalid 
		/// counts.
		/// </summary>
		ValidFailureCountPassed = 33,

		InvalidMerchantOrder = 34,

		Inconsistency = 35,

		/// <summary>
		/// transaction with the given order id already has been voided successfully
		/// </summary>
		SaleIsAlreadyVoidedSuccessfully = 36,
		/// <summary>
		/// transaction with the given order id already has been reversaled successfully
		/// </summary>
		SaleIsAlreadyReversaledSuccessfully = 37,

		RefundAmountIsUpperThanOrderAmount = 38,
		RefundAmountIsUpperThanCountOfOrdersAmount = 39,
		RefundOrderIsInvalid = 40,

		#endregion

		#region Sale Tracing Statuses (50-59)
		/// <summary>
		/// transaction registered in database and is going to perform
		/// </summary>
		Pending = 50,

		OrderReceived = 51,

		//CustomerPaymentRequest = 42,
		InProgress = 52,
		
		EnquiriedByMerchant = 53,

		CardInfoReceived = 54,

		#endregion

		#region Bank Switch related errors (60-79)
		/// <summary>
		/// receive response from bank switch failed!
		/// </summary>
		ReceiveError = 60,

		/// <summary>
		/// sending request to bank switch failed
		/// </summary>
		SendError = 61,

		MerchantNotLogin = 62,

		FormatError = 63,
		InvalidCardReader = 64,
		InvalidProductCodes = 65,
		IssuerOrSwitchInoperative = 66,
		ReconcileError = 67,
		RecordNotFound = 68,
		ReEnterTransaction = 69,
		Referral = 70,
		SESystemMlfunction = 71,
		SN = 72,
		TraceNumberNotFound = 73,
		TransNotPermitted2Term = 74,
		BadTerminalId = 75,
		BankNotSupportedBySwitch = 76,
		BatchNumberNotFound = 77,
		DuplicateTransmission = 78,
		TransNotOK = 79, 
		UnNoneError = 80,
		LanTimeout = 81,

		#endregion

		#region Application Errors (90-99)
		/// <summary>
		/// when an exception is raised through performing the a process, must
		/// be discovered it position and be removed
		/// </summary>
		ExceptionRaised = 90,

		/// <summary>
		/// database transactions failed!
		/// </summary>
		DatabaseError = 91,
		#endregion
	}
}

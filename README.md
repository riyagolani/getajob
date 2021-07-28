# getajob
This website lets a client to create an account by sharing necessary credentials to get a job. The client can check once logged-in if he has been assigned any job by the admin or not. <br/><br/>Whereas admin can see all the client available to get a job along with their current job role (employed/unemployed). Admin can assign job role to any client as per his requirement.


#### Command Example
``` !flashpoint-compromised-credentials-list ```

#### Context Example
``` {
    "hits": {
        "hits": [
            {
                "_id": "dummy_id1",
                "_source": {
                    "affected_domain": "learnable.com",
                    "basetypes": [
                        "credential-sighting"
                    ],
                    "body": {
                        "raw": "magnov69gmail.com@example.com:$2a$10$Riq2qdHlq6ULnOaDJl52v.42X2dUGEmxeWcxmnP/51zq2ZDJ2I0uW"
                    },
                    "breach": {
                        "_header": {},
                        "basetypes": [
                            "breach"
                        ],
                        "breach_type": "credential",
                        "created_at": {
                            "date-time": "2021-01-26T12:00:00Z",
                            "timestamp": 1611662400
                        },
                        "first_observed_at": {
                            "date-time": "2021-01-27T18:50:36Z",
                            "timestamp": 1611773436
                        },
                        "fpid": "dummy_breach_fpid1",
                        "source": "Analyst Research",
                        "source_type": "Analyst Research",
                        "title": "Compromised Users from Learnable.com Jan262021",
                        "victim": "learnable.com"
                    },
                    "credential_record_fpid": "dummy_credential_record_fpid1",
                    "customer_id": "dummy_customer_id1",
                    "domain": "example.com",
                    "email": "dummy_email1",
                    "extraction_id": "u2iZ8ht-Xnyx8SMdKpksDg",
                    "extraction_record_id": "DJyV6XgsUeGUpwl_CXWnOw",
                    "fpid": "dummy_source_fpid1",
                    "header_": {
                        "indexed_at": 1617221192,
                        "pipeline_duration": 63791896256
                    },
                    "is_fresh": true,
                    "last_observed_at": {
                        "date-time": "2021-01-27T18:50:36Z",
                        "timestamp": 1611773436
                    },
                    "password": "dummy_password1",
                    "password_complexity": {
                        "has_lowercase": true,
                        "has_number": true,
                        "has_symbol": true,
                        "has_uppercase": true,
                        "length": 60,
                        "probable_hash_algorithms": [
                            "Blowfish(OpenBSD)",
                            "Woltlab Burning Board 4.x",
                            "bcrypt"
                        ]
                    },
                    "times_seen": 1
                },
                "_type": "_doc",
                "matched_queries": [
                    "dat.edm.org.r"
                ],
                "sort": [
                    -9223372036854775808
                ]
            },
            {
                "_id": "dummy_fpid2",
                "_source": {
                    "basetypes": [
                        "credential-sighting"
                    ],
                    "body": {
                        "raw": "admin@example.com:FSBQy5uiServer"
                    },
                    "breach": {
                        "_header": {},
                        "basetypes": [
                            "breach"
                        ],
                        "breach_type": "credential",
                        "created_at": {
                            "date-time": "2021-03-17T12:24:39Z",
                            "timestamp": 1615983879
                        },
                        "first_observed_at": {
                            "date-time": "2021-03-17T12:24:39Z",
                            "timestamp": 1615983879
                        },
                        "fpid": "dummy_breach_fpid2",
                        "source": "https://www.virustotal.com/gui/file/013cd8ffff502cba3b413a480d7f42f353b03388e764b8705de56d6ee7fefbba/details",
                        "source_type": "VirusTotal",
                        "title": "Compromised Users from VirusTotal: Compressed File \"013cd8ffff502cba3b413a480d7f42f353b03388e764b8705de56d6ee7fefbba\" Mar172021"
                    },
                    "credential_record_fpid": "dummy_credential_record_fpid2",
                    "customer_id": "dummy_customer_id2",
                    "domain": "example.com",
                    "email": "dummy_email2",
                    "extraction_id": "9Yl03sZsXZaJjYNc7ozSrQ",
                    "extraction_record_id": "3kPIO4i1W9-SMtYdGPZ_yw",
                    "fpid": "dummy_source_fpid2",
                    "header_": {
                        "indexed_at": 1617219857,
                        "pipeline_duration": 63791896269
                    },
                    "is_fresh": true,
                    "last_observed_at": {
                        "date-time": "2021-03-17T12:24:39Z",
                        "timestamp": 1615983879
                    },
                    "password": "dummy_password2",
                    "password_complexity": {
                        "has_lowercase": true,
                        "has_number": true,
                        "has_symbol": false,
                        "has_uppercase": true,
                        "length": 14,
                        "probable_hash_algorithms": [
                            "BigCrypt"
                        ]
                    },
                    "times_seen": 1
                },
                "_type": "_doc",
                "matched_queries": [
                    "dat.edm.org.r"
                ],
                "sort": [
                    -9223372036854775808
                ]
            }
        ],
        "max_score": null,
        "total": 5609
    },
    "timed_out": false,
    "took": 741
}
 ```

#### Human Readable Output

##### Below are the detail found:
| **FPID** | **Email** | **Breach Source** | **Breach Source Type** | **Password** | **Created Date** | **First Observed Date** |
| --- | --- | --- | --- | --- | --- | --- |
| dummy_fpid1 | dummy_email1 | Analyst Research| Analyst Research | dummy_password1 | 2021-01-26T12:00:00Z | 2021-01-27T18:50:36Z |
| dummy_fpid2 | dummy_email2 | https://www.virustotal.com/gui/file/0e59531d9ebf1d695cb41c1afd443c22bfaef56dafa636c2cf157deb19b679fe/details | VirusTotal | dummy_password2 | 2021-06-06T20:47:35Z | 2021-06-06T20:47:35Z |

